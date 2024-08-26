<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Packages\Service\Article as GetArticlesService;
use Packages\Domain\Article\Entity\Article;
use Packages\Domain\Article\ValueObject\ID;
use Packages\Domain\Article\ValueObject\Title;
use Packages\Domain\Article\ValueObject\Photo;
use Packages\Domain\Article\ValueObject\Body;

class PostArticlesControler extends Controller
{

    public function __construct(GetArticlesService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

    public function index()
    {
        $articles = $this->articlesService->execute();

        return view('articles.index', compact('articles'));
    }
}
