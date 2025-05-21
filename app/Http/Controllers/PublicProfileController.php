<?php
namespace App\Http\Controllers;

use App\Models\User;

class PublicProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('public.profile', compact('user'));
    }
}

