<?php
namespace App\models;
class AboutModels
{
    public function index()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=basic', 'root', 'root');
        $sth = $dbh->query('SELECT * FROM blogs');
        $blog = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $blog;
    }
}