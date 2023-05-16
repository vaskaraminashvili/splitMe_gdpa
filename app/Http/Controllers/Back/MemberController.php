<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $members = Member::query();
        if ($request->has('filter_name')) {
            $members->where('title->ka', 'LIKE', "%{$request->get('filter_name')}%");
        }

        $items = $members->paginate();
        return view('admin::pages.member.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::pages.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->user()->id, 'slug' => $request->title['ka']]);
        $member = Member::create($request->all());
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $member->addMediaFromRequest('img')->toMediaCollection('member');
        }
        return redirect()->route('admin.members.index');
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
    public function edit(Member $member)
    {
        return view('admin::pages.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {

        $request->merge(['slug' => geoToEng($request->title['ka'])]);
        $member->update($request->all());
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $member->addMediaFromRequest('img')->toMediaCollection('member');
        }
        return redirect()->route('admin.members.edit', $member->id)->withSuccess(__('განახლდა'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $memeber)
    {
        $memeber->delete();
        return redirect()->route('admin.memebers.index')->withSuccess(__('წაიშალა'));
    }
}
