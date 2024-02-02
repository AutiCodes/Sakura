<?php

namespace Modules\Articles\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Articles\Entities\Article;
use Modules\Articles\Entities\Category;
use Illuminate\Support\Str;
use Modules\News\Enums\ArticleStatusEnum;
use Modules\Media\Entities\Media;
use File;
use Modules\Users\Entities\User;
use Auth;

class ArticleAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")
        ->with('categories')
        ->with('users')
        ->paginate(10);
        
        return view('articles::pages.articles_all', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('articles::pages.articles_new', ['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([ 
            'title' => ['required', 'max:255', 'unique:sk_articles,title', 'string'],
            'editorData' => ['required'],
            'categories' => ['required']
        ]);

        // Creating article
        $article = Article::create([
            'author_id' => Auth::id(),
            'publish_date' => now(),
            'title' => $validated['title'],
            'content' => $validated['editorData'],
            'image' => findFirstImageInHtml($validated['editorData']),
            'slug' => Str::slug($validated['title']),
            'status' => ArticleStatusEnum::PUBLISHED
        ]);

        // Attaching article with categories in Pivot
        foreach($validated['categories'] as $category)
        {
            $article->categories()
                ->attach(intval($category));
        } 
        
        // Attach author to article
        $article->users()->attach(Auth::id());

        // Return to all articles with succes message
        return redirect(route('artikelen.index'))
            ->with('success', 'Je artikel is geplaatst!');
    }

    /**
     * Saves media from article
     * @param Request $request media file
     * @return string media url
     */
    public function articleSaveMedia(Request $request)
    {
        $validated = $request->validate([
            'file' => ['required']
        ]);
        
        // Put media in /public/media 
        $validated['file']
            ->move(public_path('/media'), $validated['file']
            ->getClientOriginalName());

        // Gets file dimentions
        $fileDimentions = getimagesize(public_path('media/'.$validated['file']->getClientOriginalName()));

        // Add media info to DB
        Media::create([
            'name' => $validated['file']->getClientOriginalName(),
            'size' => File::size(public_path('/media/'. $validated['file']->getClientOriginalName())),
            'uploaded_by' => 1, // Change to session author when having that module ready
            'dimensions' => $fileDimentions[0] . 'x' . $fileDimentions[1]
        ]);

        return 'http://127.0.0.1:8000/media/' . $validated['file']->getClientOriginalName();
    }

    /**
     * Show the specified resource.
     * @param int $id
     */
    public function show()
    {   
        return redirect('wdqa');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($slug)
    {   
        $article = Article::where('slug', $slug)
            ->with('categories')
            ->first();
        
        $articleCategoryIds = array();
        foreach($article->categories as $category) {
            $articleCategoryIds[] = $category->id;
        }

        $categories = Category::all();

        return view('articles::pages.articles_edit', [
            'article' => $article,
            'categories' => $categories,
            'categoriesIds' => $articleCategoryIds
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $slug)
    {   
        $validated = $request->validate([ 
            'author' => ['required', 'int'],
            'title' => ['required', 'max:255', 'string'],
            'editorData' => ['required'],
            'categories' => ['required']
        ]);

        $article = Article::where('slug', $slug)->first();
        
        $article->update([
            'author' => $validated['author'],
            'title' => $validated['title'],
            'content' => $validated['editorData'],
            'updated_at' => now()
        ]);
        
        $article->categories()->sync(array_map('intval', $validated['categories']));

        return redirect(route('artikelen.index'))->with('success', 'Artikel is geupdated');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     */
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->first();
        if($article === null) {
            return redirect()->back()->with('error','Artikel niet gevonden!');
        }

        $article->categories()->detach();
        $article->users()->detach();
        $article->delete();

        return redirect(route('artikelen.index'))->with('success','Artikel is verwijderd!');
    }
}
