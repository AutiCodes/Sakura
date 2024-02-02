<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Articles\Entities\Article;
use Modules\Articles\Entities\Category;
use Modules\AdminPanel\Enums\SiteTextTypeEnum;
use Modules\SiteEdit\Entities\SiteText;

class NewsController extends Controller
{
    // Homepage
    public function index(Request $request)
    {   
        // Getting site text
        $siteText = SiteText::all();

        // Getting all articles with categories
        $articles = Article::orderBy('publish_date', 'desc')
            ->published()
            ->with('categories')
            ->with('users')
            ->get();
        
        $articlesHardware = $articles->filter(function (Article $article) {
                return $article->categories->search(function (Category $category) {
                    return $category->name === 'Hardware';
                }) !== false;
            });
        
        $articlesSoftware = $articles->filter(function (Article $article) {
            return $article->categories->search(function (Category $category) {
                return $category->name === 'Software';
                }) !== false;
            });            

        return view('news::pages.home', [
            'articles' => $articles,
            'hardware' => $articlesHardware,
            'software' => $articlesSoftware,
            // Fix enum bug
            'title' => $siteText->where('type', 0)->first()->content,
            'name' => $siteText->where('type', 1)->first()->content,
            'footer' => $siteText->where('type', 2)->first()->content,
            'homeText' => $siteText->where('type', 3)->first()->content
        ]);
    }


    public function articleList(Request $request, $categorySlug) 
    {
        // Getting site text
        $siteText = SiteText::all();

        $articles = Article::orderBy('publish_date','desc')
        ->where('status', 1)
        ->whereRelation('categories','slug', $categorySlug)
        ->get();

        return view('news::pages.article_list', [
            'articles' => $articles,
            'title' => $categorySlug,
            'footer' => $siteText->where('type', 2)->first()->content
        ]);
    }

    // 404 error
    public function notFound(Request $request)
    {
        return view('news::pages.404');
    }
}
