<?php

namespace App\controllers;

use App\models\BlogModels;
use Core\orm\Insert;
use Core\orm\Select;
use Core\Render;

class Blog extends Controller
{
    public function index()
    {
        $blogs = new BlogModels();
        $data = $blogs->index();
        Render::render("social/BlogsViews.php", $data);
    }
    public function addBlog()
    {
        $new = new BlogModels();
        $new->addPost($_POST);
        Render::render("social/newBlog.php");
    }
}