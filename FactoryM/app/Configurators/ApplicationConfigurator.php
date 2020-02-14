<?php
namespace App\Configurators;

use App\Contracts\ApplicationConfiguratorContract;
use App\Contracts\ApplicationContract;
use App\Application\Application;
use App\Logistics\RoadLogistic;

class ApplicationConfigurator implements ApplicationConfiguratorContract
{
    /**
     * @param null $type
     * @return ApplicationContract
     * @throws \Exception
     */
    public function make($type = null): ApplicationContract
    {
        if (!$type) {
            throw new \Exception('Не был передан параметр type');
        }

        return new Application(new $type);
    }
}
