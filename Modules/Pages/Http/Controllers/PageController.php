<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Entities\Media;
use Modules\Pages\Entities\Page;
use File;
use Str;
use Modules\AdminPanel\Enums\PageStatusEnum;
use Modules\Articles\Entities\Category;
use Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages::pages.pages_all', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('pages::pages.pages_add', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([ 
            'title' => ['required', 'unique:sk_pages,title'],
            'editorData' => ['required'],
            'categories' => ['required']
        ]);

        // Creating page
        $page = Page::create([
            'author_id' => Auth::id(),
            'title' => $validated['title'],
            'content' => $validated['editorData'],
            'slug' => Str::slug($validated['title']),
            'status' => PageStatusEnum::PUBLISHED
        ]);

        // Attaching page with categories in Pivot table
        foreach($validated['categories'] as $category)
        {
            $page->categories()
                ->attach(intval($category));
        } 
        
        // Return to all articles with succes message
        return redirect(route('paginas.index'))
            ->with('success', 'Je artikel is geplaats!');
    }

    /**
     * Save media from new page
     * @param Request $request
     * @return string Absolute URL to the media file
     */
    public function saveMedia(Request $request) 
    {
        // Validation
        $validated = $request->validate([
            'file' => ['mimes:jpg,png,jpeg,ico,mp4,mp3', 'required']
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
            'uploaded_by' => Auth::id(),
            'dimensions' => $fileDimentions[0] . 'x' . $fileDimentions[1]
        ]);

        return 'http://127.0.0.1:8000/media/' . $validated['file']->getClientOriginalName();
    }
    
    /**
     * Show the form for editing the specified resource.
     * @param string $slug
     * @return Renderable
     */
    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->with('categories')->first();

        $articleCategoryIds = array();
        foreach($page->categories as $category) {
            $articleCategoryIds[] = $category->id;
        }
        $allCategories = Category::all();

        return view('pages::pages.pages_edit', [
            'page' => $page,
            'categoriesIds' => $articleCategoryIds,
            'allCategories' => $allCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $slug
     * @return \Redirect all pages page
     */
    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->first();

        if ($request->title === $page->title and $request->editorData === $page->content) {
            return redirect(route('paginas.index'))->with('error', 'Pagina is niet gewijzigd');
        }

        $validated = $request->validate([
            'title' => ['string', 'required'],
            'editorData' => ['required'],
            'categories' => ['required']
        ]);

        $page->update([
            'title' => $validated['title'],
            'content' => $validated['editorData'],
            'author' => Auth::id()
        ]);

        $page->categories()->sync(array_map('intval', $validated['categories']));

        return redirect(route('paginas.index'))->with('success', 'Pagina is geupdated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $slug
     * @return \Redirect
     */
    public function destroy($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if ($page === null) {
            return redirect(route('paginas.index'))->with('error', 'Kon de pagina niet vinden!');
        }

        $page->categories()->detach();
        $page->delete();

        return redirect(route('paginas.index'))->with('success', 'Pagina is verwijderd!');
    }
}
