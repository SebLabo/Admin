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
    private $defaultModule = false;
    private $page;
    private $action;
    private $get = array();
    private $page404 = false;

    public function __construct($url)
    {

        $dispatch = explode('/', $url);
        array_shift($dispatch);
        $NbArguments = count($dispatch);
        Aff($dispatch);

        switch ($dispatch[0]) {

            case null:
                $this->defaultModule = true;
            case 'front':
            case 'Front':
                $this->module = 'Front';
                break;
            case 'Admin':
                $this->module = 'Admin';
        };


//        $this->module = 'Front';
//        if (isset($dispatch[0]) and $dispatch[0] == 'Admin') {
//            $this->module = 'Admin';
//        }


        if ($taille > 4) {
            for ($i = 4; $i < $taille; $i++) {
                $arg = explode('_', $chemin[$i]);
                $this->get[$arg[0]] = $arg[1];
            }
        }

        Aff($this);


    }
}