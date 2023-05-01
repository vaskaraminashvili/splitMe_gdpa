<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = News::query();
        if($request->has('filter_name')) {
            $news->where('title->ka', 'LIKE', "%{$request->get('filter_name')}%");
        }
        if($request->isMethod('post')) {
            $news = $news->paginate();
            return  view('admin::pages.news.table', compact('news'));
        }
        $news = $news->paginate();
        return  view('admin::pages.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->user()->id, 'slug' => geoToEng($request->title['ka'])]);
        $news = News::create($request->all());
        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $news->addMediaFromRequest('img')->toMediaCollection('news');
        }
        return redirect()->route('admin.news.index');
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
    public function edit(News $news)
    {
        return view('admin::pages.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        // make here to show live toast when updating status
        if (!$request->get('statusUpdate')) {
            $request->merge(['slug' => geoToEng($request->title['ka'])]);
        }
        $news->update($request->all());
        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $news->addMediaFromRequest('img')->toMediaCollection('news');
        }
        if (!$request->get('statusUpdate')) {
            return redirect()->route('admin.news.edit', $news->id)->withSuccess(__('განახლდა'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->withSuccess(__('წაიშალა'));
    }
}
