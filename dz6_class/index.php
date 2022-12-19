<?php
include "dz6(class)/Product.php";
include "dz6(class)/NotebookProduct.php";
include "dz6(class)/BookProduct.php";
include "dz6(class)/PhoneProduct.php";
include "dz6(class)/SumsungProduct.php";
include "dz6(class)/AppleProduct.php";
include "dz6(class)/AsusProduct.php";
include "dz6(class)/LenovoProduct.php";

$product = new Product();
$product->setName('Asus');
$product->setColl(10);
var_dump($product->getColl());
var_dump($product->getName());
echo "<br>";
$note = new NotebookProduct();
$note->setColl(2);
$note->setPrice(100);
var_dump($note->getPrice());
var_dump($note->getCheck());
echo "<br>";
$book = new BookProduct();
$book->setColl(13);
$book->setPage(100);
var_dump($book->getPage());
var_dump($book->sumPage());
echo "<br>";
$phone = new PhoneProduct();
$phone->setColl(132);
$phone->setRam(12);
var_dump($phone->getRam());
var_dump($phone->getCollRam());
echo "<br>";
$sumsung = new SumsungProduct();
$sumsung->setCpu(2);
var_dump($sumsung->getCpu());
$sumsung->setRam(8);
$sumsung->setColl(41);
var_dump($sumsung->getCpuRam());
var_dump($sumsung->getVse());
echo "<br>";
$appl = new AppleProduct();
$appl->setRam(4);
$appl->setCpu(4);
$appl->setColl(14);
var_dump($appl->getCpu());
var_dump($appl->getRamCpu());
var_dump($appl->getVse());
echo "<br>";
$asus = new AsusProduct();
$asus->setColl(124);
$asus->setPrice(412);
$asus->setCore(2);
var_dump($asus->getCore());
var_dump($asus->getCoreRam());
var_dump($asus->getAll());
echo "<br>";
$lenovo = new LenovoProduct();
$lenovo->setCore(4);
$lenovo->setPrice(12);
$lenovo->setColl(2);
var_dump($lenovo->core);
var_dump($lenovo->getCoreRam());
var_dump($lenovo->getAll());
//var_dump($lenovo->step());