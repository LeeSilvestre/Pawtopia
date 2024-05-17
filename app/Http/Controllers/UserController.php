<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Get all users
    public function allUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    // Get a single user by email
    public function showAUser($email)
    {
        $user = User::where('user_email', $email)->first(['user_id', 'user_name', 'user_password']);
        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    // Create a new user
    public function createAccount(Request $request)
    {
        $student = User::create($request->all());
        return response()->json($student, 201);
    }
}
