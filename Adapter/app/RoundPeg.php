<?php
namespace App;


use App\Contracts\RoundContract;

class RoundPeg implements RoundContract
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
}