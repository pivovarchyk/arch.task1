<?php
declare(strict_type=1);

namespace VP\Tank;

class Vector
{
    protected array $body;

    public function __construct(array $body)
    {
        $this->body = $body;
    }

    public static function plus(Vector $v1, Vector $v2)
    {
        $newBody = [];

        for($i = 1; $i < count($v1->body); $i++) {
            $newBody[$i] = $v1->body[$i] + $v2->body[$i];
        }

        return new Vector($newBody);
    }
}