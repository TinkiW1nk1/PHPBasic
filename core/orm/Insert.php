<?php

namespace Core\orm;

class Insert extends SQL
{
    private array $data;
    private array $value;
    private array $colums;

    public function execute()
    {
        $this->setColums();
        $this->setValue();
        $sql = $this->buildQuery();
        $query = $this->connect->query($sql);
        return $query;
    }

    protected function buildQuery(): string
    {
        $sql = "INSERT INTO " . $this->getTableName() . " ( " . $this->getColums() . " ) VALUES ( " . $this->getValue() . " )";

        return $sql;
    }

    private function getTableName(): string
    {
        return  $this->tableName;
    }

    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    private function setColums(): void
    {
        $this->colums = array_keys($this->data);
    }
    private function getColums(): string
    {
        return implode(',', $this->colums);
    }
    private function setValue(): void
    {
        $this->value = array_values($this->data);
    }
    private function getValue(): string
    {
        $temp = [];
        foreach ($this->data as $value){
            $temp[] = "'" . $value . "'";
        }
        return implode(',', $temp);
    }

}