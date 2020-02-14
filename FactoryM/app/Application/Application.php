<?php
namespace App\Application;


use App\Contracts\ApplicationContract;
use App\Logistics\RoadLogistic;

class Application implements ApplicationContract
{
    /** @var RoadLogistic */
    private $logistic;

    public function __construct($logistic)
    {
        $this->logistic = new $logistic;
    }

    public function delivery(): void
    {
        $this->logistic->createTransport()->delivery();
    }
}