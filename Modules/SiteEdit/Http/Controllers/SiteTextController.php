<?php

namespace Modules\SiteEdit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SiteEdit\Entities\SiteText;
use Modules\AdminPanel\Enums\SiteTextTypeEnum;
use Modules\Media\Entities\Media;
use File;

class SiteTextController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $siteText = SiteText::all();
        
        // Fix enum bug
        return view('siteedit::pages.display_edit_text', [
            'title' => $siteText->where('type', 0)->first()->content,
            'name' => $siteText->where('type', 1)->first()->content,
            'footer' => $siteText->where('type', 2)->first()->content,
            'homeText' => $siteText->where('type', 3)->first()->content
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Redirect
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
        return view('siteedit::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('siteedit::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $type
     * @return \Redirect
     */
    public function update(Request $request, $type)
    {
        // Update site title
        if ($type === 'title') {
            $validated = $request->validate([
                'title' => ['required', 'string']
            ]);

            $title = SiteText::where('type', SiteTextTypeEnum::TITLE);

            $title->update([
                'author_id' => 7, // Change to user
                'content' => $validated['title']
            ]);

            return redirect(route('weergave-tekst.index'))->with('success', 'Titel is aangepast!');
        }

        // Update site name
        elseif ($type === 'name') {
            $validated = $request->validate([
                'name' => ['required', 'string']
            ]);

            $name = SiteText::where('type', SiteTextTypeEnum::NAME);

            $name->update([
                'author_id' => 7, // Change to user
                'content' => $validated['name']
            ]);

            return redirect(route('weergave-tekst.index'))->with('success', 'Naam is aangepast!');
        }        

        // Update site footer
        elseif ($type === 'footer') {
            $validated = $request->validate([
                'footer' => ['required', 'string']
            ]);

            $footer = SiteText::where('type', SiteTextTypeEnum::FOOTER);

            $footer->update([
                'author_id' => 7, // Change to user
                'content' => $validated['footer']
            ]);

            return redirect(route('weergave-tekst.index'))->with('success', 'Footer is aangepast!');
        } 

        // update home text
        $validated = $request->validate([
            'editorData' => ['required']
        ]);

        $homeText = SiteText::where('type', SiteTextTypeEnum::HOMETEXT);

        $homeText->update([
            'author_id' => 7,
            'content' => $validated['editorData']
        ]);

        return redirect(route('weergave-tekst.index'))->with('success', 'Homepage tekst is aangepast!');
    }

    /**
     * Saves media from editor
     * @param Request $request
     * @return string absolute image url
     */
    public function saveMedia(Request $request)
    {
        // Validation
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
            'uploaded_by' => 7, // Change to session author when having that module ready
            'dimensions' => $fileDimentions[0] . 'x' . $fileDimentions[1]
        ]);

        return 'http://127.0.0.1:8000/media/' . $validated['file']->getClientOriginalName();
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
