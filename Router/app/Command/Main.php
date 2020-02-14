<?php


namespace App\Command;


use App\Command\Classes\CalculateCommand;
use App\Command\Classes\Command;
use App\Command\Classes\PrintCommand;

class Main
{
    public static function exec()
    {
        $cCommand = new CalculateCommand('Calculate', 1, 5, 12, 143);
        $sum = self::executeCommand($cCommand);
        $pCommand = new PrintCommand('Print', 'asd', 'ppps', $sum);
        self::executeCommand($pCommand);
    }

    public static function executeCommand(Command $command)
    {
        echo 'Executing\'' . $command->commandName . '\' command. <br>';
        return $command->execute();
    }
}