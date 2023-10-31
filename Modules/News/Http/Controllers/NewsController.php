<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\news\Entities\articles;
use Modules\News\Entities\categorys;

class NewsController extends Controller
{
    // Shows homepage
    public function index()
    {   
      // Getting articles
      $articles = articles::with('category')->with('secondCategory')->orderBy('publish_date', 'desc')->where('status', 'Gepubliceerd')->get();
      return view('news::pages.home', ['articles' => $articles]);
    }

    // Shows article list page with
    public function articleList($articleCategory)
    {
      return view('news::pages.article_list');
    }  

    // Shows an individual article
    public function article($articleSlug)
    { 
      $article = articles::with('category')->with('secondCategory')->where('slug', $articleSlug)->first();
      if ($article === null) {
        return redirect('/404');
      }

      return view('news::pages.article', ['article' => $article]);
    }

    // 404 error
    public function notFound()
    {
      return view('news::pages.404');
    }
}
