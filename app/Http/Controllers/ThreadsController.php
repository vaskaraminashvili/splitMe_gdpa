<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::query()
            ->select('id','title', 'body', 'user_id')
            ->with(['user'])
            ->paginate(10);
        return view("web::threads.index", compact('threads'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Thread $thread)
    {
    }

    public function edit(Thread $thread)
    {
    }

    public function update(Request $request, Thread $thread)
    {
    }

    public function destroy(Thread $thread)
    {
    }
}
