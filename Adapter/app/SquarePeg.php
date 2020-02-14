<?php
namespace App;


class SquarePeg
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}