<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view("web::pages.profile.index");
    }

    public function updateProfile()
    {
        dd(request()->all());
    }
}
