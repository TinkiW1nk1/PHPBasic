<?php
namespace App\models;
use Core\orm\Insert;
use Core\orm\Select;
use PDO;
use Core\orm\DbConector;
class HomeModels
{
    private string $tableName = 'gallery';

    public function index()
    {
        $select = new Select();
        return $select->setTableName($this->tableName)->execute();
    }
}