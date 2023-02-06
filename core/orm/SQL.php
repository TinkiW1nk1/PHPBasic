<?php

namespace Core\orm;

abstract class SQL
{
    protected string $tableName;
    protected \PDO $connect;
    protected array $where;

    public function __construct()
    {
        $conect = new DbConector();
        $this->connect = $conect->connect();
    }

    protected abstract function buildQuery(): string;

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function setWhere(array $data): self
    {
        $this->where = $data;
        return $this;
    }

    public function getWhere()
    {
        $where = new Where($this->where);
        return $where->where();

    }

}