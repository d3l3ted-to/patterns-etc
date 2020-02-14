<?php
namespace App\Controllers;

use App\Devices\Radio;
use App\Devices\TV;

class Remote
{
    /** @var Radio|TV $device */
    private $device;

    public function __construct($device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        if ($this->device->getVolume() >= $this->device::VOLUME_CHANGE_COUNT)
        {
            $this->device->setVolume($this->device->getVolume() - $this->device::VOLUME_CHANGE_COUNT);
        } else {
            $this->device->setVolume($this->device::ZERO_VOLUME);
        }
    }

    public function volumeUp()
    {
        if ($this->device->getVolume() <= ($this->device::MAX_VOLUME - $this->device::VOLUME_CHANGE_COUNT))
        {
            $this->device->setVolume($this->device->getVolume() + $this->device::VOLUME_CHANGE_COUNT);
        } else {
            $this->device->setVolume($this->device::MAX_VOLUME);
        }
    }

    public function channelDown()
    {
        if ($channel = $this->device->getChannel() > $this->device::CHANNEL_CHANGE_COUNT)
        {
            $this->device->setChannel($channel - $this->device::CHANNEL_CHANGE_COUNT);
        }
    }

    public function channelUp()
    {
        if ($channel = $this->device->getChannel() < $this->device::MAX_CHANNEL)
        {
            $this->device->setChannel($channel + $this->device::CHANNEL_CHANGE_COUNT);
        }
    }
}