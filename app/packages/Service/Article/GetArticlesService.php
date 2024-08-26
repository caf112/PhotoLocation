<?php

namespace Packages\Service\Article;

use Illuminate\Support\Collection;
use Packages\Domain\Article\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Repository\Article\ArticleRepositoryInterface;

class GetArticlesService
{
    private ArticleRepositoryInterface $articleInterface;

    public function __construct(ArticleReopsitoryInterface $articleInterface)
    {
        $this->articleInterface = $articleInterface;
    }

    public function execute(): Colelction
    {
        return $this->articleRepository->selectArticles();
    }
}