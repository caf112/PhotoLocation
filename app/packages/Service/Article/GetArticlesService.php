<?php

namespace Packages\Service\Article;

use Illuminate\Support\Collection;
use Packages\Domain\Article\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Repository\Article\ArticleRepositoryInterface;

class GetArticlesService
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(): Collection
    {
        return $this->articleRepository->selectArticles();
    }
}