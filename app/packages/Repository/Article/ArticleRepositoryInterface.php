<?php

namespace Packages\Repository\Article;

use Packages\Domain\Article\Entity\Artice;
use Illuminate\Support\Collection;
use Packages\Domain\Article\ValueObject;

interface ArticleRepositoryInterface
{
    public function selectArticles(ID $id): Collection;

    public function createArticle(Article $article): Article;
}
