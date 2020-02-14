<?php
require __DIR__.'/../vendor/autoload.php';

use App\Factories\UbuntuFactory;
use App\Main;
use App\Factories\WinFactory;

Main::test(new UbuntuFactory);