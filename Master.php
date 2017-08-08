<?php
/**
 * Created by PhpStorm.
 * User: webqa
 * Date: 21/07/2017
 * Time: 17:13
 */


class Master_Dispatch
{
    private $module;
    private $page;
    private $action;
    private $get = array();
    private $controller;

    public function __construct($url)
    {
        $dispatch = explode('/', $url);
        array_shift($dispatch);

        switch ($dispatch[0]) {
            case 'Admin':
                $this->module = 'Admin';
                break;
            default:
                array_unshift($dispatch, 'front');
            case 'front':
            case 'Front':
                $this->module = 'Front';
                break;
        };


        if (isset($dispatch[1]) && $dispatch[1] != null) {
            $this->page = $dispatch[1];
        } else {
            $this->page = 'index.php';
        }
        if (isset($dispatch[2]) && $dispatch[2] != null) {
            $this->action = $dispatch[2];
        }

        foreach ($dispatch as $key => $data) {
            if ($key > 2) {
                $argument = explode('_', $data);
                $this->get[$argument[0]] = $argument[1];
            }
        }

        if (file_exists('Modules/' . $this->module . "/Controllers/" . $this->page . ".php")) {
            $controller = $this->module . "_" . $this->page;
            include 'Modules/' . $this->module . "/Controllers/" . $this->page . ".php";
            $this->controller = new $controller;
            $this->controller->Initialise();
            if ($this->action != null) {
//                $this->controller->
            }
        } else {
            echo 'Modules/' . $this->module . "/Controllers/" . $this->page . ".php";
        }


        Aff($this);


    }
}