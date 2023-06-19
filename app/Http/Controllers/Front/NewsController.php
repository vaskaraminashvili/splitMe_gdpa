<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function homw()
    {
    }
    public function index()
    {
        $data['news'] = News::query()
            ->latest()
            ->paginate(12);
        // dd($data);
        return view('web::pages.news.index', compact('data'));
    }
    public function show(News $news)
    {
        $data['news'] = $news;
        $data['latest'] = News::query()
            ->latest()
            ->limit(3)
            ->get();
        return view('web::pages.news.show', compact('data'));
    }
}