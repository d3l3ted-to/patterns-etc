<?php
namespace App\Factories;

use App\Contracts\GUIButton;
use App\Contracts\GUICheckBox;

abstract class AbstractGUIFactory
{
    abstract public function createButton(): GUIButton;

    abstract public function createCheckBox(): GUICheckBox;
}