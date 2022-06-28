<?php

class Cart
{
    public $list = [];
    public $price = 0;

    public function addItem(object $obj)
    {
        $this->list = $obj;
        $this->price += $obj->price;
    }

    public function removeItem(object $obj)
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
