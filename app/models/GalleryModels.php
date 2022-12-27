<?php
namespace App\models;
class GalleryModels
{
    public function index()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=basic', 'root', 'root');
        $sth = $dbh->query('SELECT * FROM images');
        $img = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $img;

    }
}