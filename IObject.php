<?php
namespace VP\Tank;

interface IObject
{
    public function get(string $property);
    public function set(string $property, $value);
}