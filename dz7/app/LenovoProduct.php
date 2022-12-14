<?php
namespace App;
use Core\NotebookProduct;

class LenovoProduct extends NotebookProduct
{
    public int $core;

    public function setCore(int $core):void
    {
        $this->core = $core;
    }
    public function getCore(): int
    {
        return $this->core;
    }
    public function getCoreRam(): int
    {
        return $this->core - $this->price;
    }
    public function getAll(): int
    {
        return $this->coll + $this->core;
    }

/*    public function step(int $step): int
    {
        return pow($this->core, $step);
    }*/
}