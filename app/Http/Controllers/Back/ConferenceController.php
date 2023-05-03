<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $conferences = Conference::query();
        if($request->has('filter_name')) {
            $conferences->where('title->ka', 'LIKE', "%{$request->get('filter_name')}%");
        }
        if($request->isMethod('post')) {
            $conferences = $conferences->paginate();
            return  view('admin::pages.conference.table', compact('conferences'));
        }
        $conferences = $conferences->paginate();
        return  view('admin::pages.conference.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::pages.conference.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $conference = Conference::create($request->all());
        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $conference->addMediaFromRequest('img')->toMediaCollection('conference');
        }
        return redirect()->route('admin.conferences.index');
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
    public function edit(Conference $conference)
    {
        return view('admin::pages.conference.edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conference $conference)
    {
        // make here to show live toast when updating status
        $conference->update($request->all());
        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $conference->addMediaFromRequest('img')->toMediaCollection('conference');
        }
        if (!$request->get('statusUpdate')) {
            return redirect()->route('admin.conferences.edit', $conference->id)->withSuccess(__('განახლდა'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('admin.conferences.index')->withSuccess(__('წაიშალა'));
    }
}
