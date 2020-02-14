<?php


namespace App\Decorator\Classes;


class Main
{
    public static function execute()
    {
        $vk = new VKDecorator();
        $sms = new SMSDecorator();
        $notification = new Notification('ASDADAASAS');
        $sms->wrap($notification);
        $vk->wrap($sms);
        //return $vk->notify('SIIIIIIIR');
        return $vk->notify2();
    }
}