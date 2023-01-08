<?php

namespace Core;

use App\controllers\Error;


class Router
{

    public function run()
    {
        $url = !empty($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : '/';
        $config = require "../conf/routes.php";
        if( array_key_exists($url, $config) ){
            $rout = explode('@', $config[$url]);
            $className = $rout[0];
            $methodName = $rout[1];
        }else{
            $className = 'Error';
            $methodName = 'methodError';
        }
        $className = '\App\controllers\\' . $className;
        if(class_exists($className)){
            $classObject = new $className();
        }else{
            $className = 'Error';
            $methodName = 'methodError';
        }
        $classObject->$methodName();
    }

    public function lowerCamelCase($str)
    {
        $str = str_replace('-', ' ', $str);
        $str = lcfirst(str_replace(' ', '',ucwords($str)));
        return $str;
    }

    public function upperCamelCase($str)
    {
        return ucfirst($this->lowerCamelCase($str));
    }

}