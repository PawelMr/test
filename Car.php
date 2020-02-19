<?php


class Car
{
    protected $color = 'grey';

    public $litr = '1.4';

    public function getColor()
    {
        return $this->color;
    }

    public final function setColor($value)
    {
        $this->color = $value;
    }
}