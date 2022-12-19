<?php

namespace Core;

use App\controllers\Error;


class Router
{

    public function run()
    {

        $query = explode('/', $_SERVER['REQUEST_URI']);
        if( empty($query[1]) ){
            $query[1] = 'home';
        }


        //создарние обьекта
        $className = '\App\controllers\\' . $this->upperCamelCase($query[1]);
        if(class_exists($className)){
            $classObject = new $className();
        }else{
            $classObject = new Error();
        }
        //вызов метода
        if(!empty($query[2])){
            $methodName = $this->lowerCamelCase($query[2]);
            if(method_exists($classObject, $methodName)){
                $classObject->$methodName();
            }else{
                $methodName = 'index';
                $classObject->$methodName();
            }
        }else{
            $methodName = 'index';
            $classObject->$methodName();
        }



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