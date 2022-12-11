<?php
final class BookProduct extends Product
{
    public int $page;

    public function setPage(int $page): void
    {
        $this->page = $page;
    }
    public function getPage(): int
    {
        return $this->page;
    }

    public function sumPage(): int
    {
        return $this->page + $this->coll;
    }
/*    public function step(int $step): int
    {
        return pow($this->page, $step);
    }*/
}