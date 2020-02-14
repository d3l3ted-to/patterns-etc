<?php
namespace App\Devices;

use App\Contracts\DeviceContract;

class TV implements DeviceContract
{
    const
        MAX_CHANNEL = 100,
        VOLUME_CHANGE_COUNT = 10,
        CHANNEL_CHANGE_COUNT = 1,
        ZERO_VOLUME = 0,
        MAX_VOLUME = 100,
        ZERO_CHANNEL = 0;
    private $state, $channel, $volume;

    public function __construct($channel = 0, $volume = 0, $state = 0)
    {
        $this->channel = $channel;
        $this->volume = $volume;
        $this->state = $state;
    }

    public function isEnabled(): Bool
    {
        if ($this->state) {
            return true;
        } else {
            return false;
        }
    }

    public function disable()
    {
        $this->state = 0;
    }

    public function enable()
    {
        $this->state = 1;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($percent)
    {
        $this->volume = $percent;
    }

}