<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AdminPanel\Entities\Page;

class PageController extends Controller
{
    /**
     * Show the specified resource.
     * @param string $slug
     * @return Renderable
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)
            ->with('categories')
            ->first();

        return view('news::pages.page', ['page' => $page]);
    }
}
