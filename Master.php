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
    private $page404 = false;

    public function __construct($url)
    {

        $dispatch = explode('/', $url);
        array_shift($dispatch);
        $NbArguments = count($dispatch);
        Aff($dispatch);

        $this->module = 'Front';
        if (isset($dispatch[0]) and $dispatch[0] == 'Admin') {
            $this->module = 'Admin';
        }

        echo $this->module;

        if ($taille < 3) {
            $this->page404 = true;
        }
        $this->module = $chemin[1];
        $this->page = $chemin[2];
        if ($taille > 3) {
            $this->action = $chemin[3];
        }
        if ($taille > 4) {
            for ($i = 4; $i < $taille; $i++) {
                $arg = explode('_', $chemin[$i]);
                $this->get[$arg[0]] = $arg[1];
            }
        }

        Aff($this);


    }
}