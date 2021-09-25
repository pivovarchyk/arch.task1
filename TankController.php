<?php
declare(strict_types=1);

namespace VP\Tank;

class TankController
{
    public function action()
    {
        $object = new Tank();

        $cmds = [
            new MoveCommand(new MovableAdapter($object)),
            new RotateCommand(new RotableAdapter($object)),
        ];

        $macroCmd = new MacroCommand($cmds);
        $macroCmd->execute();
    }
}