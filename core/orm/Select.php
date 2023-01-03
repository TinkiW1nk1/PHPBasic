<?php

namespace Core\orm;

class Select
{
    private DbConector $conect;
    public string $tableName;
    public array $fields;

    public function __construct($data)
    {
        $this->conect = new DbConector();
        $this->setFields($data);
    }
//вернуть результат выборки
    public function exicute()
    {
        $dbh = $this->conect->connect();
        $sth = $dbh->query($this->buildQuery());
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }
//строит строку запроса
    private function buildQuery(): string
    {
        $query = '';
        if (count($this->fields) > 0) {
            if (!empty($this->fields)) {
                $query = 'SELECT ' . $this->fields[0];
            } else {
                throw new \Exception('Укажите что выбрать!!');
            }
            if (!empty($this->fields[1]) && is_string($this->fields[1])) {
                $query .= ' FROM ' . $this->fields[1];
            }else{
                throw new \Exception('Где выбрать?!!!!');
            }
            if(!empty($this->fields[2]) && !empty([$this->fields[3]])){
                $query .= ' WHERE ' . $this->fields[2] . ' = ' . $this->fields[3];
            }
        }
        return $query;
    }

    public function setFields($fields = []): void
    {
        $this->fields = $fields;
    }

}