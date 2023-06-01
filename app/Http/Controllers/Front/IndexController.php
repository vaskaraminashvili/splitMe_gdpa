<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['slides'] = Slider::query()
            ->whereHas('media')
            ->where('status', 1)
            ->orderBy('sort', 'desc')
            ->get();
        $data['news'] = News::query()
            ->latest()
            ->limit(3)
            ->get();
        return view("web::pages.welcome", compact('data'));
    }
}