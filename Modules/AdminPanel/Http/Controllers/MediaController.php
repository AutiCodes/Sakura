<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AdminPanel\Entities\Media;
use File;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {   
        $media = File::allFiles(public_path('media'));
        $mediaInformation = Media::all();
        
        return view('adminpanel::pages.media_all', [
            'media' => $media,
            'mediaInformation' => $mediaInformation
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('adminpanel::pages.media_add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file' => ['required', 'max:4096']
        ]);

        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        
        // Put media in /public/media 
        $validated['file']->move(public_path('/media'),$fileName);
        
        // Gets file dimentions
        $fileDimentions = getimagesize(public_path('media/'.$fileName));

        // Add media info to DB
        Media::create([
            'name' => $fileName,
            'size' => File::size(public_path('/media/'. $fileName)),
            'uploaded_by' => 1,
            'dimensions' => $fileDimentions[0] . 'x' . $fileDimentions[1]
        ]);

        return redirect(route('uploads.index'))
            ->with('success','Media is toegevoegd!');
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
     * @param int $id
     * @return
     */
    public function update(Request $request)
    {
        $media = Media::where('name', $request->input('old_name'))->first();

        if ($media === null) {
            return redirect()
                ->back()
                ->with('error', 'Oeps! Kon het bestand niet vinden in de database');
        }

        if ($request->input('old_name') === $request->input('name')) {
            return redirect()
                ->back()
                ->with('error', 'Bestandsnaam is hetzelfde als eerst!');
        }

        $request->validate([
            'name' => ['unique:sk_media,name']
        ]);

        $media->update([
            'name' => $request->input('name')
        ]);

        File::move(public_path('media/'. $request->input('old_name')), public_path('media/'. $request->input('name')));

        return redirect()->back()->with('success', 'Bestand is aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return
     */
    public function destroy($fileName)
    {
        $file = File::delete(public_path('/media/' . $fileName));

        if ($file === null) {
            return redirect()
                ->back()
                ->with('error', 'Kon het bestand niet vinden!');
        }

        $fileDB = Media::where('name', $fileName);

        if ($fileDB === null) {
            return redirect()
                ->back()
                ->with('error', 'Kon het bestand niet vinden in de database!');            
        }

        $fileDB->delete();

        return redirect()->back()->with('success', 'Bestand is verwijderd!');
    }
}