<?php

namespace Packages\Domain\Article\ValueObject\Title;

class Title
{
    private const LENGTH = 100;
    private string $value;

    private function __construct(string $value)
    {
        $this-> value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function create(string $value): self
    {
        if(mb_strlen($value) > self::LENGTH) {
            throw new ValueException('異常なタイトルです。');
        }

        return new self($value);
    }

    public static function createEmpty(): self
    {
        return new self('');
    }
}