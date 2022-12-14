<?php
namespace Core;
use Public\Product;

class NotebookProduct extends Product
{
    public int $price;

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCheck(): int
    {
        return $this->coll * $this->price;
    }

/*    public function step(int $step): int
    {
        return pow($this->price, $step);
    }*/
}
