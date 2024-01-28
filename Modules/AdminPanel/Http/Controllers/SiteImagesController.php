<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AdminPanel\Enums\SiteImageTypeEnum;
use Modules\AdminPanel\Entities\SiteImage;

class SiteImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     * @return string Absulute image paths
     */
    public function index()
    {
        $imageLocations = SiteImage::all();

        return view('adminpanel::pages.display_edit_images', [
            'faticon' => $imageLocations->where('type', SiteImageTypeEnum::FATICON)->first(),
            'main' => $imageLocations->where('type', SiteImageTypeEnum::MAINICON)->first(),
            'signin' => $imageLocations->where('type', SiteImageTypeEnum::SIGNIN)->first(),
            'header' => $imageLocations->where('type', SiteImageTypeEnum::HEADER)->first(),
            'footer' => $imageLocations->where('type', SiteImageTypeEnum::FOOTER)->first()
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
    public function update(Request $request, $type)
    {
        switch ($type) {
            case 'faticon':
                $currentIcon = SiteImage::where('type', SiteImageTypeEnum::FATICON)->first();
                break;
            case 'main':
                $currentIcon = SiteImage::where('type', SiteImageTypeEnum::MAINICON)->first();
                break;
            case 'signin':
                $currentIcon = SiteImage::where('type', SiteImageTypeEnum::SIGNIN)->first();
                break;
            case 'header':
                $currentIcon = SiteImage::where('type', SiteImageTypeEnum::HEADER)->first();
                break;
            default:
                $currentIcon = SiteImage::where('type', SiteImageTypeEnum::FOOTER)->first();
                break;
        }

        $validated = $request->validate([
            $type => ['required', 'mimes:jpg,png,jpeg,ico']
        ]);

        $fileName = time().'.'. $validated[$type]->getClientOriginalExtension();
        $validated[$type]->move(public_path('/site_icons'), $fileName);

        if ($currentIcon === null) {
            SiteImage::create([
                'author_id' => 1,
                'type' => $typeEnum,
                'image_location' => public_path('/site_icons/' . $fileName)
            ]);
        } else {
            $currentIcon->update([
                'author_id' => 1,
                'image_location' => public_path('/site_icons/' . $fileName)
            ]);
        }

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
