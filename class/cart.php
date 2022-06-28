<?php

class Cart
{
    public $list = [];
    public $price = 0;

    public function addItem($obj)
    {
        $this->list = $obj;
        $this->price += $obj->price;
    }

    public function removeItem($obj)
    {
        // rimuovo elemento da $this->list;
        $this->price -= $obj->price;
        $this->list = array_diff($this->list, $obj);
    }

    public function sell()
    {
        $this->list = [];
        $this->price = 0;
    }
}
