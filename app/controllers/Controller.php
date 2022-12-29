<?php

namespace App\controllers;
use Core\Render;
class Controller
{
    public function render($viewName, array $data = [])
    {
        Render::render($viewName, $data);
    }

}