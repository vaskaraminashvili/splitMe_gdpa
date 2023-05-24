<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('web::pages.register');
    }
    /**
     * Handle an authentication attempt.
     */
    public function register(Request $request)
    {

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'specialization' => ['required'],
            'password' => ['required', 'min:6', 'confirmed'],
            // 'password_confirmation' => ['required', 'min:6', 'same:password'],
        ]);


        $user = User::create($credentials);
        $user->specializations()->attach($credentials['specialization']);
        dd($user);
    }


}
