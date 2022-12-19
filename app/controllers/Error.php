<?php

namespace App\controllers;

class Error
{
    public function index()
    {
        echo "Class Not found";
    }
     public function methodError()
     {
         echo "Method not found";
     }

}