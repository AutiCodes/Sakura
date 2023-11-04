<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\news\Entities\Article;
use Modules\News\Entities\Category;

class NewsController extends Controller
{
    // Homepage
    public function index(Request $request)
    {   
      // Getting all articles with categories
      $articles = Article::orderBy('publish_date', 'desc')->where('status', 1)->with('categories')->get();
      return view('news::pages.home', ['articles' => $articles]);
    }

    // Shows article list page with
    public function articleList(Request $request, $CategorySlug)
    { 
      $articles = Article::orderBy('publish_date','desc')->where('status', 1)->whereRelation('categories','slug', $CategorySlug)->get();
      return view('news::pages.article_list', ['articles' => $articles]);
    }  

    // Shows an individual article
    public function article(Request $request, $articleSlug)
    { 
      $article = Article::where('status', 1)->where('slug', $articleSlug)->with('categories')->first();

      return view('news::pages.article', ['article' => $article]);
    }

    // 404 error
    public function notFound(Request $request)
    {
      return view('news::pages.404');
    }
}
