<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Article;
use Modules\News\Entities\Category;
use Illuminate\Support\Str;
use Modules\News\Enums\ArticleStatusEnum;
use Modules\AdminPanel\Entities\Media;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")
        ->with('categories')
        ->paginate(10);

        return view('adminpanel::pages.articles_all', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('adminpanel::pages.articles_new', ['categories'=> $categories]);
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
            'author' => ['required', 'int'],
            'title' => ['required', 'max:255', 'unique:sk_articles,title', 'string'],
            'editorData' => ['required'],
            'categories' => ['required']
        ]);

        // Creating article
        $article = Article::create([
            'author_id' => $validated['author'],
            'publish_date' => now(),
            'title' => $validated['title'],
            'content' => $validated['editorData'],
            'slug' => Str::slug($validated['title']),
            'status' => ArticleStatusEnum::PUBLISHED
        ]);

        // Attaching article with categories in Pivot
        foreach($validated['categories'] as $category)
        {
            $article->categories()
                ->attach(intval($category));
        } 
        
        // Return to all articles with succes message
        return redirect(route('artikelen.index'))
            ->with('success', 'Je artikel is geplaats!');
    }

    /**
     * Saves media from articles
     */
    public function articleSaveMedia(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'file' => ['mimes:jpg,png,jpeg,ico,mp4,mp3', 'required']
        ]);

        $file = $validated['file'];
        
        // Put media in /public/media 
        $file->move(public_path('/media'), $file->getClientOriginalName());

        // Gets file dimentions
        $fileDimentions = getimagesize(public_path('media/'.$file->getClientOriginalName()));

        // Add media info to DB
        Media::create([
            'name' => $file->getClientOriginalName(),
            'size' => File::size(public_path('/media/'. $file->getClientOriginalName())),
            'uploaded_by' => 1, // Change to session author when having that module ready
            'dimensions' => $fileDimentions[0] . 'x' . $fileDimentions[1]
        ]);

        return 'http://127.0.0.1:8000/media/' . $file->getClientOriginalName();
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

        return view('adminpanel::pages.articles_edit', [
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
        $article->delete();
        return redirect(route('artikelen.index'))->with('success','Artikel is verwijderd!');
    }
}
