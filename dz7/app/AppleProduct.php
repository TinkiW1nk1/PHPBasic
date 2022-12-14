<?php
namespace App;
use Core\PhoneProduct;

class AppleProduct extends PhoneProduct
{
    public int $cpu;

    public function setCpu(int $int): void
    {
        $this->cpu = $int;
    }
    public function getCpu(): int
    {
        return $this->cpu;
    }

    public function getRamCpu(): int
    {
        return $this->cpu / $this->ram;
    }

    public function getVse(): int
    {
        return $this->coll + $this->cpu;
    }
/*    public function step(int $step): int
    {
        return pow($this->cpu, $step);
    }*/
}