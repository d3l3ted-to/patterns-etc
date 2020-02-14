<?php
namespace App\Factories;

use App\Contracts\GUIButton;
use App\Contracts\GUICheckBox;
use App\Factories\AbstractGUIFactory;
use App\GUIElements\Buttons\UbuntuButton;
use App\GUIElements\CheckBoxes\UbuntuCheckBox;

class UbuntuFactory extends AbstractGUIFactory
{
    public function createButton(): GUIButton
    {
        return new UbuntuButton();
    }

    public function createCheckBox(): GUICheckBox
    {
        return new UbuntuCheckBox();
    }
}