<?php
namespace App\Factories;

use App\Contracts\GUIButton;
use App\Contracts\GUICheckBox;
use App\Factories\AbstractGUIFactory;
use App\GUIElements\Buttons\WinButton;
use App\GUIElements\CheckBoxes\WinCheckBox;

class WinFactory extends AbstractGUIFactory
{
    public function createButton(): GUIButton
    {
        return new WinButton();
    }

    public function createCheckBox(): GUICheckBox
    {
        return new WinCheckBox();
    }
}