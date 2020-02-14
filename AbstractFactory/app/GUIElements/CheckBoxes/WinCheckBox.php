<?php
namespace App\GUIElements\CheckBoxes;


use App\Contracts\GUICheckBox;

class WinCheckBox implements GUICheckBox
{
    protected $state = 0;

    public function click(): void
    {
        if ($this->state) {
            $this->state = 0;
        } else {
            $this->state = 1;
        }
        echo "You clicked on Windows checkbox = {$this->state}";
    }
}