<?php
require __DIR__.'/../vendor/autoload.php';

use App\RoundPeg;
use App\RoundHole;
use App\RoundPegAdapter;
use App\SquarePeg;

$square = new SquarePeg(8);
$round = new RoundPeg(5);
$hole = new RoundHole(5);
var_dump($hole->fits(new RoundPegAdapter($square)));