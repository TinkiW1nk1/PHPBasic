<?php

namespace App\controllers;

use App\models\UserModels;
use Core\Render;

class Users extends Controller
{
    public function addUser()
    {
        $model = new UserModels();
        $data = $model->addUser($_POST);
        Render::render("social/regestry.php");
    }
}