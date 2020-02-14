<?php
namespace App;

use App\Factories\AbstractGUIFactory;

class Main
{
    public static function test(AbstractGUIFactory $factory)
    {
        $button = $factory->createButton();
        $button->click();
        echo "<p></p>";

        $checkBox = $factory->createCheckBox();
        for ($i = 1; $i<5; $i++) {
            $checkBox->click();
            echo "<p></p>";
        }
    }
}