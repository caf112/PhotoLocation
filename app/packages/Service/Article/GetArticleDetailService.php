<?php

namespace Packages\Service\Article;

use Packages\Domain\Article\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Repository\Article\ArticleRepositoryInterface;

class GetArticleDetailService
{
    private ArticleRepositoryInterface $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function execute(ID $id): Article
    {
        $articleEntity = $this->articleRepository->selectArticle($id);

        return $articleEntity;
    }
}