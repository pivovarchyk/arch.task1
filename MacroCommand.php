<?php
declare(strict_type=1);

namespace VP\Tank;

class MacroCommand implements ICommand
{
    private array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}