<?php

class HomeController
{
    private $name;
    public function __construct()
    {
        $this->name = 'HomeController';
    }


    public function index()
    {
        return 'Hello je suis le ' . $this->name . ' dans HomeController';
    }
}
