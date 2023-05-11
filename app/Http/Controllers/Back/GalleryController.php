<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries = Gallery::query();
        if ($request->has('filter_name')) {
            $galleries->where('title->ka', 'LIKE', "%{$request->get('filter_name')}%");
        }

        $galleries = $galleries->paginate();
        return view('admin::pages.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->user()->id, 'slug' => $request->title['ka']]);
        $gallery = Gallery::create($request->all());
        if ($images = $request->file('img')) {
            foreach ($images as $image) {
                $gallery->addMedia($image)->toMediaCollection('gallery');
            }
        }

        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        // dd($gallery->getMedia('gallery'));
        return view('admin::pages.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {

        $request->merge(['slug' => geoToEng($request->title['ka'])]);
        $gallery->update($request->all());
        if ($images = $request->file('img')) {
            $gallery->clearMediaCollection('gallery');
            foreach ($images as $image) {
                $gallery->addMedia($image)->toMediaCollection('gallery');
            }
        }
        return redirect()->route('admin.gallery.edit', $gallery->id)->withSuccess(__('განახლდა'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->clearMediaCollection('gallery');
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->withSuccess(__('წაიშალა'));
    }
}
