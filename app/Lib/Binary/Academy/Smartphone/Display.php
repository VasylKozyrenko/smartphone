<?php


namespace App\Lib\Binary\Academy\Smartphone;


class Display
{
    /**
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $width;

    /**
     * @param int $height
     * @param int $width
     */
    public function __construct($height = 480, $width = 320)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function toString()
    {
        return sprintf('%dx%d display', $this->height, $this->width);
    }
}