<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();// récupère user connecté
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'title' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'username' => 'required|string|unique:users,username,' . $user->id
        ]);

        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profil mis à jour !');
    }

    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        
        return view('profile.show', [
            'user' => $user,
            'projects' => $user->projects,
            'skills' => $user->skills
        ]);
    }
}
