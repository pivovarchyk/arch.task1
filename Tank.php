<?php
declare(strict_type=1);

namespace VP\Tank;

class Tank implements IObject
{
    private Vector $position;
    private Vector $velocity;
    private int $direction;
    private int $angularVelocity;
    private int $maxDirections;
    private int fuel;

    public function get(string $property)
    {
        // TODO: Implement get() method.
        return $this->$property;

    }

    public function set(string $property, $value)
    {
        // TODO: Implement set() method.
        $this->$property = $value;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}