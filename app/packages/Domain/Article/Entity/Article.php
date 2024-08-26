<?php

namespace Packages\Domain\Order\Entity;

class Articles
{
    private ID $id;
    private Title $title;
    private Photo $photo;
    private Body $body;

    private function __construct(
        int $id,
        string $title,
        string $photo,
        string $body
    ){
        $this->id = $id;
        $this->title = $title;
        $this->photo = $photo;
        $this->body = $body;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}