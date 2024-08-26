<?php

namespace Packages\Repository\Article;

use App\Models\Article as ArticleModel;
use Illuminate\Support\Collection;
use Packages\Domain\Article\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function selectArticles(): Collection
    {
        return ArticleModel::all()->map(function (ArticleModel $articleModel) {
            return $articleModel->toEntity();
        });
    }

    public function selectAtticle(ID $id): Article
    {
        $articleModel = ArticleModel::find($id->getValue());

        return $articlemodel->toEntity();
    }

    public function createArticle(Article $article): Article
    {
        $articleModel = ArticleModel::createByEntity($article);

        return $articleModel->toEntity();
    }
}
