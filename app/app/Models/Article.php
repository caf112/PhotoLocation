<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Packages\Domain\Article\Entity\Article as ArticleEntity;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Domain\Article\ValueObject\Title;
use Packages\Domain\Article\ValueObject\Photo;
use Packages\Domain\Article\ValueObject\Body;
use Packages\Domain\Article\ValueObject\UpdatedOrderAt;

class Article extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'title',
        'photo',
        'body',
    ];

    public function toEntity(): ArticleEntity
    {
        return ArticleEntity::create(
            ID::create($this->id),
            Title::create($this->title),
            Photo::create($this->photo),
            Body::create($this->body)
        );
    }

    public static function createByEntity(ArticleEntity $articleEntity): Article
    {
        return self::create([
            'id' =>$articleEntity->getID()->getValue(),
            'title' =>$articleEntity->getTitle()->getValue(),
            'photo' =>$articleEntity->getPhoto()->getValue(),
            'body' =>$articleEntity->getBody()->getValue()
        ]);
    }
}
