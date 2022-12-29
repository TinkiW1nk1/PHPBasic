<?php

namespace App\controllers;

use App\models\GalleryModels;
use Core\Render;

class Gallery extends Controller
{
    public function index()
    {
        $model = new GalleryModels();
        $data = $model->index();
        Render::render("social/GallaryView.php", $data);
    }
}