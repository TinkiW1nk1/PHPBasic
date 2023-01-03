<?php
namespace App\models;
use Core\orm\Select;
use PDO;
use Core\orm\DbConector;
class HomeModels
{

  public function index()
  {
      $q = new Select(['*', 'users', 'id',3]);
      $rows = $q->exicute();
      return $rows;

  }



}