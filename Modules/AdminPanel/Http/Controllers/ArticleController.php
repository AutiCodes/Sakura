<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Article;
use Modules\News\Entities\Category;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /*
    * CMS - Messages
    */
    public function articlesAll()
    {
      return view('adminpanel::pages.articles_all');
    }

    public function articlesAdd()
    {
      return view('adminpanel::pages.articles_new');
    }

    public function articlesAddStore(Request $request)
    {
      // Add validation rules

      $article = Article::create([
        'author_id' => $request->input('author'),
        'publish_date' => now(),
        'title' => $request->input('title'),
        'content' => $request->input('editorData'),
        'status' => 1,
        'slug' => Str::slug($request->input('title')),

      ]); 

      foreach ($request->input('categorys') as $category) {
        $article->categorys()->attach(intval($category));
      }
    }

    public function articlesCategorys()
    {
      return view('adminpanel::pages.articles_categorys');
    }

    public function articlesTags()
    {
      return view('adminpanel::pages.articles_tags');
    }
}
