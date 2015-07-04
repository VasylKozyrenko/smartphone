<?php


namespace App\Lib\Binary\Academy\Smartphone;


class Processor
{
    /**
     * @var integer
     */
    protected $vendor;

    /**
     * @var integer
     */
    protected $cores;

    /**
     * @param $vendor
     * @param $cores
     */
    public function __construct($vendor = 5555, $cores = 2)
    {
        $this->vendor = $vendor;
        $this->cores = $cores;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('Qualcomm %d %d cores', $this->vendor, $this->cores);
    }
}