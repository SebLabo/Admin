<?php

/**
 * Created by PhpStorm.
 * User: seb
 * Date: 19/07/2017
 * Time: 17:17
 */
Abstract class Admin_Abstract extends Core_Abstract
{
    private $btnAdd = true;
    private $btnEdit = true;
    private $btnDelete = true;
    private $diplayCols = array();
    private $itemsPerPage = 30;
    private $othersCols = array();
    private $message = null;


    public function setAddBtn(bool $value)
    {
        $this->btnAdd = $value;
    }

    public function setEditBtn(bool $value)
    {
        $this->btnEdit = $value;
    }

    public function setDeleteBtn(bool $value)
    {
        $this->btnDelete = $value;
    }

    public function setItemNumber(int $value)
    {
        $this->itemsPerPage = $value;
    }

    public function setDisplayCols(array $tab)
    {
        $this->diplayCols = $tab;
    }

    public function setOthersCols(array $tab)
    {
        $this->othersCols = $tab;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function Initialise()
    {

    }
}

