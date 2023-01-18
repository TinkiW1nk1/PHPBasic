<?php

namespace App\models;

use Core\orm\Insert;

class Model
{
    public function add(string $tableName, array $data)
    {
        if(!empty($data)){
            $new = new Insert();
            $new->setTableName($tableName)->setData($data)->execute();
        }
    }
}