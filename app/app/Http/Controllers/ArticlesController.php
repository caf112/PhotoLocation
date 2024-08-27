<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexArticlesRequest;
use Packages\Service\Article\GetArticlesService;

class ArticlesController extends Controller
{

    private GetArticlesService $getArticlesService;

    public function __construct(GetArticlesService $getArticlesService)
    {
        $this->getArticlesService = $getArticlesService;
    }

    public function index()
    {
        $articles = $this->getArticlesService->execute();

        return view('articles.index', compact('articles'));
    }

    public function indexArticles(IndexArticlesRequest $indexArticlesRequest)
    {
        $articleEntity = $indexArticlesRequest->toDomain();

        $this->getArticlesService->execute($articleEntity->getID());

        return redirect(route('index'));
    }
}
