<?php


namespace App\Lib\Binary\Academy\Smartphone;


class Camera
{
    /**
     * @var integer
     */
    protected $resolution;

    /**
     * @param $resolution
     */
    public function __construct($resolution = 8)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '123';
        //return sprintf('%d megapixels camera', $this->resolution);
    }
}