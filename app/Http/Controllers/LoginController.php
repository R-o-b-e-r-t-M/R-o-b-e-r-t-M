<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userData = $request->validate([
            "email" => "required|string|email|max:255",
            "password" => "required|string|min:8",
            // "password_confirmation"=> "",
        ]);

        if (!Auth::attempt($userData)) {
            return response()->json([
                "message" => "Invalid credentials"
            ], 401);
        }

        $user = Auth::guard('web')->user();

        $token = $user->createToken("API Token")->plainTextToken;

        return response()->json([
            "message" => "Login successful",
            "access_token" => $token,
            "token_type" => "Bearer",
            "user" => $user
            ]);
    }

    public function register(Request $request)
    {
        $userData = $request->validate([
            "name"=> "required|string|max:255",
            "email"=> "required|string|email|max:255|unique:users",
            "password"=> "required|string|min:8",
            // "password_confirmation"=> "",
            ]);
            $user = User::create([
                "name"=> $userData["name"],
                "email"=> $userData["email"],
                // "password"=> bcrypt($userData["password"]),
            "password" => Hash::make($userData["password"]),
            ]);
            return response()->json([
                "message"=> "User created successfully",
                "user"=> $user
            ], 201);
    }
}
