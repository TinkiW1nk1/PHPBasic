<?php

namespace App\controllers;

use App\models\AboutModels;
use Core\Render;

class About extends Controller
{
    public function index()
    {

        $model = new AboutModels();
        $data = $model->index();
        Render::render("social/aboutView.php", $data);
    }
}