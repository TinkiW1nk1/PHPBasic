<?php
namespace App\models;
use Core\orm\Select;
use PDO;
use Core\orm\DbConector;
class HomeModels
{
    private string $tableName = 'users';

    public function index()
    {
        $select = new Select();
        $select->setFields(['*']);
        $select->setTableName($this->tableName);
        //$select->setJoin(['blogs', 'ON', 'users.id = blogs.author_id']);
        //$select->setLimit(1);
        //$select->setOrder('email', 'DESC');
        $select->setGroup('id');

        return $select->execut();
       /* return $select->setFields(['id'])
            ->setTableName($this->tableName)
            ->setJoin(['blogs', 'ON', 'users.id = blogs.author_id'])
            ->execut();*/

    }
}