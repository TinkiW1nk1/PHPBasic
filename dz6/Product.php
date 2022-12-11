<?php
class Product
{
    protected int $coll;
    protected string $name;

    public function setColl(int $int): void
    {
        $this->coll = $int;
    }

    public function getColl(): int
    {
        return $this->coll;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
//    abstract function step(int $step);
}