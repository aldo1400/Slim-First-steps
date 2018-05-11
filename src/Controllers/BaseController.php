<?php

namespace App\Controllers;

class BaseController{
    protected $container;

    public function __construct($container)
    {
        $this->container=$container;
    }

    // $this->container->view
    // $this->view
    public function __get($property){
        if($this->container->{$property}){
            return $this->container->{$property};
        }
    }
}