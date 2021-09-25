<?php
namespace VP\Tank;

interface IMovable
{
    public function getPosition(): Vector;
    public function setPosition(Vector $position);
    public function getVelocity(): Vector;
}