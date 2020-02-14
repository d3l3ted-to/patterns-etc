<?php
namespace App\Devices;

use App\Contracts\DeviceContract;

class Radio implements DeviceContract
{
    const
        MAX_CHANNEL = 100,
        VOLUME_CHANGE_COUNT = 1,
        CHANNEL_CHANGE_COUNT = 5,
        ZERO_VOLUME = 0,
        MAX_VOLUME = 100,
        ZERO_CHANNEL = 80;

    private $state, $frequency, $volume;

    public function __construct($frequency = self::ZERO_CHANNEL, $volume = self::ZERO_VOLUME, $state = 0)
    {
        $this->frequency = $frequency;
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
        return $this->frequency;
    }

    public function setChannel($frequency)
    {
        $this->frequency = $frequency;
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