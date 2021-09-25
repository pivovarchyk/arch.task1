<?php
namespace VP\Tank;

interface IRotable
{
    public function getDirection(): int;
    public function setDirection(int $direction);
    public function getAngularVelocity(): int;
    public function getMaxDirections(): int;
}