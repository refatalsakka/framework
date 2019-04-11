<?php

namespace System;

class Loader
{
    private $app;

    private $controllers = [];

    private $models = [];

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function action($controller, $method, array $arguments)
    {

    }

    public function controller($controller)
    {
        echo '<br>';
        $controller = $this->getControllerName($controller);
        echo $controller;
        if (! $this->hasController($controller)) {
            $this->addController($controller);
        }
        
        return $this->getController($controller);
    } 

    private function hasController($controller)
    {
        return array_key_exists($controller, $this->controllers);
    }

    private function addController($controller)
    {
        $object = new $controller($this->app);

        $this->controllers[$controller] = $object;
    }

    private function getController($controller)
    {
        return $this->controllers[$controller];
    }

    private function getControllerName($controller)
    {
        $controller .= 'Controller';
        $controller .= 'App\\Controllers\\' . $controller;

        return $controller;
    }

    public function model($model)
    {

    } 

    private function hasModel($model)
    {

    }

    private function addModel($model)
    {

    }

    private function getModel($model)
    {

    }
}