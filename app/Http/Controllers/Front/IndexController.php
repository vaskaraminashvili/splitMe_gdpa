<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['slides'] = [
            '21','asd','123'
        ];
        return view("web::pages.welcome", compact('data'));
    }
}
