<?php

namespace App\models;

use Core\orm\Insert;
use Core\orm\Select;

class BlogModels extends Model
{
    private string $tableName = 'blogs';

    public function index()
    {
        $select = new Select();
        return $select->setTableName($this->tableName)->execute();
    }

    public function addPost(array $data)
    {
            if(!empty($data)){
                $new = new Insert();
                $new->setTableName($this->tableName)->setData($data)->execute();
            }
    }
}