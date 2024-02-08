<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Users\Entities\User;
use Session;

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
            return redirect('/admin-login')->with('error', 'Email of wachtwoord komen niet overeen');
        }

        // If user is visitor, redirect back to homepage
        if (User::find((Auth::id()))->hasRole('Bezoeker')) {
            return redirect('/');
        }

        return redirect('/admin');
    }   

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect ('/admin-login');
    }
}
