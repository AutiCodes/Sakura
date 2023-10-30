<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    // Shows homepage
    public function index()
    {
        return view('news::pages.home');
    }

    // Shows article list page with
    public function articleList($articleCategory)
    {
      return view('news::pages.article_list');
    }  

    // Shows an individual article
    public function article($articleSlug)
    {
      return view('news::pages.article');
    }
}
