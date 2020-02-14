<?php
require __DIR__.'/../vendor/autoload.php';

use App\Directors\PhoneDirector;
use App\Builders\PhoneBuilder;

$director = new PhoneDirector(new PhoneBuilder());
var_dump($director->makeIphoneX());
var_dump($director->makeSamsungS10());