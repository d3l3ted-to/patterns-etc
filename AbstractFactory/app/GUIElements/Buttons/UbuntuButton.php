<?php
namespace App\GUIElements\Buttons;

use App\Contracts\GUIButton;

class UbuntuButton implements GUIButton
{
    public function click(): void
    {
        echo "You clicked on ubuntu button";
    }
}