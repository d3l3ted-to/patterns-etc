<?php
namespace App;

use App\Controllers\Remote;
use App\Devices\Radio;

class Main
{
    public static function test()
    {
        $remote = new Remote(new Radio());
        $remote->togglePower();
        $remote->channelUp();
        $remote->channelUp();
        $remote->channelUp();
        $remote->channelUp();
        var_dump($remote);
        $remote->volumeUp();
        $remote->volumeUp();
        $remote->volumeUp();
        var_dump($remote);
        $remote->volumeDown();
        $remote->volumeDown();
        $remote->volumeDown();
        $remote->volumeDown();
        $remote->volumeDown();
        var_dump($remote);
        $remote->togglePower();
        $remote->volumeUp();
        var_dump($remote);
    }
}