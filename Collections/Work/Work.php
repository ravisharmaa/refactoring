<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 7/19/18
 * Time: 7:33 AM
 */

namespace Collections\Work;


class Work
{
    protected $names;

    public function __construct($names)
    {
        $this->names = $names;
    }

    public function merge()
    {
        return new static(array_merge($this->names, ['ravi','jage','hari']));
    }

    public function pop()
    {
        return new static(array_pop($this->names));
    }
}