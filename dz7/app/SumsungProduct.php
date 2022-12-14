<?php
namespace App;
use Core\PhoneProduct;

class SumsungProduct extends PhoneProduct
{
    public int $cpu;

    public function setCpu(int $cpu): void
    {
        $this->cpu = $cpu;
    }
    public function getCpu(): int
    {
       return $this->cpu;
    }

   public function getCpuRam(): int
   {
       return $this->ram * $this->cpu;
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