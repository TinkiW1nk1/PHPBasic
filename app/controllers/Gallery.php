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

    public function addPhoto()
    {
        $model = new GalleryModels();
        //$data = $model->addPhoto($_POST);
        $data = $model->add('gallery', $_POST);
        Render::render("social/newPhoto.php");
    }
}