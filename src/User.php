<?php


class User
{

    public $firstName;
    public $surName;


    public function getFullName()
    {
        return trim("$this->surName $this->firstName");
    }
}