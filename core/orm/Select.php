<?php

namespace Core\orm;

class Select
{
   private string $tableName;
   private DbConector $conect;
   private array $fields = ['*'];
   private array $join = [];
   private int $limit;
   private array $order;
   private string $group;


   public function __construct()
   {
       $conect = new DbConector();
       $this->conector = $conect->connect();
   }

    public function execute()
    {
        $sql = $this->buildQuery();
        $query = $this->conector->query($sql);
        $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }

   public function buildQuery(): string
   {
       $sql = "SELECT " . $this->getFieldString() . " FROM " . $this->tableName;
       if(!empty($this->join)){
           $sql =  $sql . ' ' . $this->getJoin();
       }
       if(!empty($this->order)){
           $sql .= ' ' . $this->getOrder();
       }
       if(!empty($this->group)){
           $sql .= ' ' . $this->getGroupBy();
       }
       if(!empty($this->limit)){
           $sql .= ' ' . $this->getLimit();
       }
       return $sql;
   }

   public function setTableName(string $name): self
   {
       $this->tableName = $name;
       return $this;
   }

   public function setFields(array $fields): self
   {
       $this->fields = $fields;
       return $this;
   }

   public function getFieldString(): string
   {
       $result = [];
       foreach ($this->fields as $key => $field)
       {
          $result[] = (is_int($key)) ? $field : $field . 'as' . $key;
       }
       return implode(',', $result);
   }

   public function setJoin(array $join): self
   {
       $this->join = $join;
       return $this;
   }

   public function getJoin(): string
   {
       $result = 'JOIN ';
       $prefix = ' ';
       foreach ($this->join as $key => $value){

           $result .= $value . $prefix;
       }
       return $result;
   }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function getLimit(): string
    {

        return 'LIMIT ' . $this->limit;
    }

    public function setOrder(array $order): self
    {
        $this->order = $order;
        return $this;
    }
//order by field asc, filed1 desc, field 2 desc
    public function getOrder(): string
    {
        $format = end($this->order);
        $order = array_pop($this->order);
        $result = 'ORDER BY ';
        $prefix = ' ';
        $count = 0;
        foreach ($this->order as $value){
            if($count != 0){
                $prefix = ', ';
            }
            $count++;
            $result .= $prefix . $value;
        }
        return $result . ' ' . $format;
    }

    public function setGroup(string $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getGroupBy(): string
    {
        return "GROUP BY " . $this->group;
    }

}

