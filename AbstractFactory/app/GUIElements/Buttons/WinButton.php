<?php
namespace App\GUIElements\Buttons;

use App\Contracts\GUIButton;

class WinButton implements GUIButton
{
    public function click(): void
    {
        echo "You clicked on Windows button";
    }
}