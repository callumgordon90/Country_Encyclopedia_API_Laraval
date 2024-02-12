<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AuthModel
{
    public static function createPasswordResetToken($email)
    {
        // Generate a random token
        $token = self::generateRandomToken();

        // Store the token in the database
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            ['token' => $token, 'created_at' => now()]
        );
    }

    private static function generateRandomToken()
    {
        return bin2hex(random_bytes(32)); // Generate a random 64-character token
    }
}
