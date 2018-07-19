<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 7/17/18
 * Time: 10:38 PM
 */

namespace Collections;


class Collection
{
    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function map($callback)
    {
        //dump($callback);
        //dump($this);
        dump(array_map($callback, $this->items));
        return new static(array_map($callback,$this->items));
    }

    public function filter($callback)
    {
        return new static(array_filter($this->items, $callback));
    }

    public function toArray()
    {
        return $this->items;
    }

}