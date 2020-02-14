<?php


namespace App;


use App\Contracts\RoundContract;

class RoundPegAdapter implements RoundContract
{
    /** @var SquarePeg $peg */
    private $peg;

    public function __construct($peg)
    {
        $this->peg = $peg;
    }

    public function getRadius()
    {
        $result = $this->peg->getWidth() * sqrt(2) / 2;
        return $result;
    }
}