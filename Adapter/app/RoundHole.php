<?php
namespace App;

use App\Contracts\RoundContract;

class RoundHole
{
    private $radius;

    public function __construct($radius)
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

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function fits(RoundContract $peg)
    {
        if ($this->radius >= $peg->getRadius()) {
            return true;
        } else {
            return false;
        }
    }
}