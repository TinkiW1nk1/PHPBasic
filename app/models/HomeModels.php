<?php
namespace App\models;
class HomeModels
{

  public function index()
  {
      $dbh = new \PDO('mysql:host=localhost;dbname=basic', 'root', 'root');
      $sth = $dbh->query('SELECT * FROM users');
      $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
      return $rows;
      debug($rows);

  }



}