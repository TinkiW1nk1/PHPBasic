<?php
namespace App\models;
use Core\orm\Insert;
use Core\orm\Select;

class GalleryModels extends Model
{
    private string $tableName = 'gallery';
    public function index()
    {
        $select = new Select();
        return $select->setTableName($this->tableName)->execute();

    }

    public function addPhoto(array $data)
    {
        if(!empty($data)){
            $new = new Insert();
            $new->setTableName($this->tableName)->setData($data)->execute();
        }
    }
}