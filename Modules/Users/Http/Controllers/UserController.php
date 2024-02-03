<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\User;
use Modules\Users\Entities\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = User::
            with('roles')
            ->withCount('articles')
            ->get();

        return view('users::pages.users_all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $roles = Role::all();
        return view('users::pages.users_add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'unique:users,name', 'max:20'],
            'email' => ['required', 'unique:users,email', 'max:30'],
            'password' => ['required', 'min:6'],
            'role' => ['required', 'string', 'max:12'],
            // TODO add profile picture validation
        ]);
        

        //TODO Check if current user is heigher then the user he wanna make

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        
        // Put profile picture in /public/system/profile-pictures
        $request->profile_picture->move(public_path('/system/profile-pictures'), $user->id. '.png');

        $user->assignRole($validated['role']);

        return redirect(route('gebruikers.index'))->with('success', 'Gebruiker ' . $validated['name'] . ' is aangemaakt!');
    }

    /**
     * Shows the specified resource to edit
     * @param int $id
     */
    public function edit($id)
    {
        $user = User::with('roles')->where('id', $id)->first();;
        $roles = Role::all();

        if (!$user) {
            return redirect(route('gebruikers.index'))->with('error', 'Gebruiker niet gevonden!');
        }
        
        return view('users::pages.users_profile', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $currentUser = User::find(Auth::id());

        if (!$user) {
            return back()->with('error', 'Gebruiker niet gevonden!');
        }

        $validated = $request->validate([
            'name' => ['unique:users,name', 'max:20'],
            'email' => ['unique:users,email', 'max:30'],
            'password' => ['max:30'],
            'role' => ['required', 'string', 'max:12']
        ]);

        if ($validated['role'] != $user->roles[0]->name && $currentUser->HasRole('Super Admin')) {
            $user->removeRole($user->roles[0]->name);
            $user->assignRole($validated['role']);
        }

        if ($validated['password'] != null) {
            $user->update([
                'password' => Hash::make($validated['password'])
            ]);
        }

        return back()->with('success', 'Gebruiker '. $user->name.' is aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        $currentUser = User::find(Auth::id());

        if (!$user) {
            return redirect(route('gebruikers.index'))->with('error', 'Gebruiker niet gevonden!');
        }

        if (!$currentUser->hasRole('Super Admin') && !$currentUser->hasRole('Admin')) {
            return redirect(route('gebruikers.index'))->with('error', 'Je hebt geen permissie om gebruikers te verwijderen!');
        }

        if ($user->roles[0]->name == 'Super Admin' && $currentUser->hasRole('Admin')) {
            return redirect(route('gebruikers.index'))->with('error', 'Je hebt geen permissie om een super gebruiker te verwijderen!');
        }

        $user->syncRoles([]);
        $user->articles()->detach();
        $user->delete();

        return redirect(route('gebruikers.index'))->with('success', 'Gebruiker '. $user->name.' is verwijderd');
    }
}
