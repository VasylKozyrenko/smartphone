<?php


namespace App\Lib\Binary\Academy\Smartphone;


class Battery
{
    /**
     * @var float
     */
    protected $capacity;

    /**
     * @param $capacity
     */
    public function __construct($capacity = 1234)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%d mAh', $this->capacity);
    }
}