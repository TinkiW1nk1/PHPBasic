<?php

namespace App\controllers;

use App\models\HomeModels;

class Home extends Controller
{
    public function index()
    {
        $model = new HomeModels();
        $data = $model->index();
        $this->render("social/homeView.php", $data);
    }



}