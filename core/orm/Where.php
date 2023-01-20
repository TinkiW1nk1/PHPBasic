<?php

namespace Core\orm;

class Where
{
    protected array $arr;

    public function __construct(array $data)
    {
        $this->arr = $data;
    }
    public function where()
    {
        $sql = 'WHERE';
        foreach ($this->arr as $k => $value){
            if(is_string($k)){
            $sql .= " $k";
            foreach ($value as $item){
                $sql .= " $item";
            }
            }else{
                foreach ($value as $item){
                    $sql .= " $item";
                }
            }
        }
        return $sql;
    }
}