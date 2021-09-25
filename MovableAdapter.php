<?php
declare(strict_types=1);
namespace VP\Tank;

class MovableAdapter implements IMovable
{
    private IObject $object;

    public function __construct(IObject $object)
    {
        $this->object = $object;
    }

    public function getPosition(): Vector
    {
        // TODO: Implement getPosition() method.
        return $this->object->get('position');
    }

    public function setPosition(Vector $position)
    {
        // TODO: Implement setPosition() method.
        $this->object->set('position', $position);
    }

    public function getVelocity(): Vector
    {
        // TODO: Implement getVelocity() method.
        return $this->object->get('velocity');
    }
}