<?php

namespace App;



use App\Configurators\ApplicationConfigurator;
use App\Logistics\AirLogistic;
use App\Logistics\RoadLogistic;
use App\Logistics\SeaLogistic;

class Main
{
    public static function test()
    {
        $applicationConfigurator = new ApplicationConfigurator();

        try {
            $applicationConfigurator->make(new SeaLogistic())->delivery();
            echo "<p></p>";
            $applicationConfigurator->make(new RoadLogistic())->delivery();
            echo "<p></p>";
            $applicationConfigurator->make(new AirLogistic())->delivery();
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }
}