<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AdminPanel\Entities\SiteImage;
use File;

class SiteImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     * @return string Absolute image path
     */
    public function index()
    {
        
        return view('adminpanel::pages.display_edit_images', [
            'icon' => url('/system/site-media/icon.png')
         ]);
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
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        return view('adminpanel::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param string $type
     * @return \Redirect
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'icon' => ['required', 'image']
        ]);        
        
        if (File::exists(public_path('/system/site-media/icon.png'))) { 
            File::delete(public_path('/system/site-media/icon.png'));
        };

        $validated['icon']->move(public_path('/system/site-media/'), 'icon.png');

        return redirect()->route('weergave-afbeeldingen.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
