<?php

/**
 * Created by PhpStorm.
 * User: webqa
 * Date: 20/07/2017
 * Time: 11:21
 */
class Admin_Pages extends Admin_Abstract
{

    public function Initialise()
    {
        //ici on modifie les privates avec les méthodes de l'abstract
        $this->setItemNumber(50);
    }
}