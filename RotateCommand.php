<?php
declare(strict_type=1);

namespace VP\Tank;

class RotateCommand implements ICommand
{
    private IRotable $rotable;

    public function __construct(IRotable $rotable)
    {
        $this->rotable = $rotable;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->rotable->setDirection(($this->rotable->getDirection() + $this->rotable->getAngularVelocity()) % $this->rotable->getMaxDirections());
    }
}