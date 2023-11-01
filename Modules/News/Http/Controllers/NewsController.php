<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\news\Entities\Articles;
use Modules\News\Entities\categorys;

class NewsController extends Controller
{
    // Shows homepage
    public function index(Request $request)
    {   
      // Getting articles
      $articles = Articles::with(['category', 'secondCategory'])->orderBy('publish_date', 'desc')->where('status', 1)->get();

      return view('news::pages.home', ['articles' => $articles]);
    }

    // Shows article list page with
    public function articleList(Request $request, $CategorySlug)
    { 
      $category = Categorys::where('slug', $CategorySlug)->first();
      $articles = Articles::with(['category', 'secondCategory'])->where('category_1', $category['id'])->orWhere('category_2', $category['id'])->where('status', 1)->get();
      if ($category === null or $articles === null) {
        return redirect('/404');
      }

      return view('news::pages.article_list', ['articles' => $articles, 'listFilter' => $category->name]);
    }  

    // Shows an individual article
    public function article(Request $request, $articleSlug)
    { 
      $article = Articles::with(['category', 'secondCategory'])->where('slug', $articleSlug)->where('status', 1)->first();
      if ($article === null) {
        return redirect('/404');
      }
      Articles::updateArticleViewCount($articleSlug, $article->view_count);

      return view('news::pages.article', ['article' => $article]);
    }

    // 404 error
    public function notFound(Request $request)
    {
      return view('news::pages.404');
    }
}
