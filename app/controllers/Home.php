<?php

namespace App\controllers;

use App\models\HomeModels;
use Core\Render;

class Home extends Controller
{
    public function index()
    {

        $model = new HomeModels();
        $data = $model->index();
        Render::render("social/homeView.php", $data);
    }
}