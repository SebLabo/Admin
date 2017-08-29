<?php

/**
 * Created by PhpStorm.
 * User: seb
 * Date: 19/07/2017
 * Time: 17:18
 */
abstract class Core_Abstract
{

    private $parameters = array();


    public function Initialise()
    {

    }

    protected function getParameters()
    {
        return $this->parameters;
    }

    protected function setParameters(array $params)
    {
        foreach ($params as $key => $value) {
            $this->parameters[$key] = $value;
        }
    }

    protected function getParameter($name)
    {
        if (isset($this->parameters[$name])) {
            return $this->parameters[$name];
        }
    }

    private function redirect($path)
    {

    }

    private function translate()
    {

    }

}