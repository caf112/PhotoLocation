<?php

namespace Packages\Domain\Order\Entity;

class Articles
{
    private ID $id;
    private Title $title;
    private Photo $photo;
    private Body $body;

    private function __construct(
        ID $id,
        Title $title,
        Photo $photo,
        Body $body
    ){
        $this->id = $id;
        $this->title = $title;
        $this->photo = $photo;
        $this->body = $body;
    }

    public function getID(): ID
    {
        return $this->id;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getBody(): Body
    {
        return $this->body;
    }

    public static function create(
        ID $id,
        Title $title,
        Photo $photo,
        Body $body
    ){
        return new self($id, $title, $photo, $body);
    }
}