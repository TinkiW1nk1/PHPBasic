<?php
namespace App\models;
use Core\orm\Insert;

class UserModels
{
    private string $tableName = 'users';

    public function addUser(array $data)
    {
       if(!empty($data)){
           $newUser = new Insert();
           $newUser->setTableName($this->tableName)->setData($data)->execute();
       }
    }
    private function validat(array $data): ?array
    {
        if(!empty($data['name']) && !empty($data['email']) && !empty($data['phone'])){
            return $data;
        }else{
            throw new \Exception("Заполните все поля", 404);
        }

    }
}