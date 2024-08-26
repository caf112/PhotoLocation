<?php

namespace Packages\Domain\Article\ValueObject\Body;

use Packages\Exception\ValueException;

class Photo
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
        if ($value === '') {
            throw new ValueException('名前は必須項目です。');
        }

        return new self($value);
    }

    public static function createEmpty(): self
    {
        return new self('');
    }
}