<?php

namespace Packages\Domain\Article\ValueObject;

class ID
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function create(string $value):   self
    {
        return new self($value);
    }
}