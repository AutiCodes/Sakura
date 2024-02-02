<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Articles\Entities\Article;
use Modules\SiteEdit\Entities\SiteText;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::published()
            ->orderBy('publish_date', 'desc')
            ->get();

        return view('news::pages.articles.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // Getting site text
        $siteText = SiteText::all();

        return view('news::pages.article', [
            'article' => $article,
            'footer' => $siteText->where('type', 2)->first()->content
        ]);
    }
}
