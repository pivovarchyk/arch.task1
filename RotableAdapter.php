<?php
declare(strict_type=1);

namespace VP\Tank;

class RotableAdapter implements IRotable
{
    private IObject $object;

    public function __construct(IObject $object)
    {
        $this->object = $object;
    }

    public function getDirection(): int
    {
        // TODO: Implement getDirection() method.
        return $this->object->direction;
    }

    public function setDirection(int $direction)
    {
        // TODO: Implement setDirection() method.
        $this->object->direction = $direction;
    }

    public function getAngularVelocity(): int
    {
        // TODO: Implement getAngularVelocity() method.
        return $this->object->angularVelocity;
    }

    public function getMaxDirections(): int
    {
        // TODO: Implement getMaxDirections() method.
        return $this->object->maxDirection;
    }
}