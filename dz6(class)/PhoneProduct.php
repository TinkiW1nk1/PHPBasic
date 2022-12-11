<?php
class PhoneProduct extends Product
{
    public int $ram;

    public function setRam(int $ram): void
    {
        $this->ram = $ram;
    }

    public function getRam(): int
    {
        return $this->ram;
    }

    public function getCollRam(): int
    {
        return$this->ram * $this->coll;
    }
/*    public function step(int $step): int
    {
        return pow($this->ram, $step);
    }*/
}
