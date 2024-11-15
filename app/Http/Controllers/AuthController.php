<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'id' => 'required|string|max:50|unique:users,user_id_code',
            'password' => 'required|string|min:8|confirmed',
            'location' => 'required|string',
        ]);

        $location = Location::firstOrCreate(['location_name' => $request->location]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_id_code' => $request->id,
            'password' => Hash::make($request->password),
            'location_id' => $location->id,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    // Log in the user
    public function login(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'password' => 'required|string',
            'location' => 'required|string',
        ]);

        $user = User::where('user_id_code', $request->id)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->location->location_name === $request->location) {
            Auth::login($user);
            return redirect()->route('dashboard'); // Assuming you have a dashboard route
        }

        return back()->withErrors(['login' => 'Invalid credentials or location']);
    }
}
