<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;

//NOTE: This controller defines the functionality for resetting a user's password:
class AuthController extends Controller
{
    public function createPasswordResetToken(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Generate and store the password reset token
        $email = $request->input('email');
        AuthModel::createPasswordResetToken($email);

        // Return a response
        return response()->json(['message' => 'Password reset token created successfully']);
    }
}
