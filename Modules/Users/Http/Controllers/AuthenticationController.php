<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    /**
     * Displays the admin login page
     * @return rendable
     */
    public function login()
    {
        return view('users::pages.login');
    }

    /**
     * Handles the post from the login
     * Redirects to dashboard is succesfull, else back to /login
     * @param Request $request
     * @return \redirect
     */
    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'string', 'max:30'],
            'password' => ['string', 'max:20']
        ]);

        // If authentication fails redirect to login page
        if (!Auth::attempt($validated)) {
            return redirect('/admin-login');
        }

        return redirect('/admin');
    }   
}
