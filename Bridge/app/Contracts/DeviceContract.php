<?php
namespace App\Contracts;

interface DeviceContract
{
    public function isEnabled(): Bool;
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume($percent);
    public function getChannel();
    public function setChannel($channel);
}