<?php


namespace App\Lib\Binary\Academy\Smartphone;


class Smartphone
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Processor
     */
    protected $processor;

    /**
     * @var Display
     */
    protected $display;

    /**
     * @var Camera
     */
    protected $camera;

    /**
     * @var Battery
     */
    protected $battery;

    /**
     * @param string $name
     * @param Processor $processor
     * @param Display $display
     * @param Camera $camera
     * @param Battery $battery
     */
    public function __construct($name, Processor $processor, Display $display, Camera $camera, Battery $battery)
    {
        $this->name = $name;
        $this->processor = $processor;
        $this->display = $display;
        $this->camera = $camera;
        $this->battery = $battery;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s %s %s %s %s.', $this->name, $this->processor, $this->display, $this->camera, $this->battery);
    }
}