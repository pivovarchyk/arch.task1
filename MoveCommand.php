<?php
declare(strict_types=1);

namespace VP\Tank;

class MoveCommand implements ICommand
{
    private IMovable $movable;

    public function __construct(IMovable $movable)
    {
        $this->movable = $movable;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->movable->setPosition(Vector::plus($this->movable->getPosition(), $this->movable->getVelocity()));
    }
}