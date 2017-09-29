<?php

class Router {
    private $router = [
        'GET' => [],
        'POST' => []
    ];

/*    public function register($router) {
        $this->router = $router;
    }*/

    public function get($uri, $controller) {
        $this->router['GET'][$uri] = $controller;
    }

    public function direct($uri, $method) {
        if(array_key_exists($uri, $this->router[$method])) {
            return $this->router[$method][$uri];
        }
    }

    public static function load($file) {
        $router = new self;
        require $file;
        return $router;
    }
}