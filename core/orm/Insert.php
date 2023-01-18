<?php

namespace Core\orm;

class Insert
{
    private DbConector $conect;
    private string $tableName;
    private array $data;
    private array $value;
    private array $colums;


    public function __construct()
    {
        $conect = new DbConector();
        $this->conector = $conect->connect();
    }
    public function execute()
    {
        $this->setColums();
        $this->setValue();
        $sql = $this->buildQuery();
        $query = $this->conector->query($sql);
        return $query;
    }

    public function buildQuery(): string
    {
        $sql = "INSERT INTO " . $this->getTableName() . " ( " . $this->getColums() . " ) VALUES ( " . $this->getValue() . " )";

        return $sql;
    }

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;
        return $this;
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