<?php

namespace App;


class Route
{
    private $routes;
    public function __construct()
    {

    }

    public function initRoute()
    {
        $route['home'] = array('route'=>'/', 'controller'=>'indexController', 'action'=>'index');
        $route['contact'] = array('route'=>'contact', 'controller'=>'contactController', 'action'=>'contact');
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}