<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // Get all categories
        $categories = Category::orderBy('name')->get();

        return view('adminpanel::pages.articles_categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('adminpanel::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:30', 'unique:sk_categorys,name'],
            'slug' => ['required', 'string', 'max:30', 'unique:sk_categorys,name']
        ]);

        $category = Category::create([
            'name' => $validated['name'],
            'slug' => $validated['slug']
        ]);

        if (!$category) {
            return redirect()
                ->route('categorieen.index')
                ->with('error','Er ging iets mis met het maken van een categorie!');
        }

        return redirect()
        ->route('categorieen.index')
        ->with('success', 'Categorie is aangemaakt!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('adminpanel::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('adminpanel::pages.articles_categories_edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:30', 'unique:sk_categorys,name'],
            'slug' => ['required', 'string', 'max:30', 'unique:sk_categorys,slug']
        ]);

        $category = Category::where('slug', $slug)->first();

        if($category === null) {
            return redirect(route('categorieen.index'))
                ->with('error','De categorie kon niet gevonden worden!');
        }

        $category->update([
            'name' => $validated['name'],
            'slug' => $validated['slug']
        ]);

        return redirect(route('categorieen.index'))
            ->with('success','De categorie is geupdated!');
    }

    /**
     * Destroy category
     * @param int $id
     * @return
     */
    public function destroy($slug)
    {
        // Gets category
        $category = Category::where('slug', $slug)
            ->first();

        // Redirect if no category has been found
        if($category === null) { 
            return redirect(route('categorieen.index'))
                ->with('error','Ik kon de categorie niet vinden');
        }

        // Get articles that are related to the category
        // That doesn't have any other category
        $articlesAttached = $category->articles()
            ->with('categories.articles')
            ->with('categories')
            ->has('categories', '<', 2)
            ->get();
        
        DB::table('sk_article_categorys')->insert(
            $articlesAttached->map(function($article) {
                return [ 
                    'article_id' => $article->id,
                    'category_id' => 4
                ];
            })->all()
        );

        // Remove category from all the related articles
        $category
            ->articles()
            ->detach();
        // Delete category
        $category
            ->delete();
        
        return redirect(route('categorieen.index'))
            ->with('success','Ik heb de categorie verwijderd!');
    }
}
