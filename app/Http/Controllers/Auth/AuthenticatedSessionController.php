<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validasi input login
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = User::where('email', $request->email)->first();

        // Memeriksa apakah user ada dan password valid
        if ($user && Hash::check($request->password, $user->password)) {
            // Menghasilkan token setelah login berhasil
            $token = $user->createToken('YourAppName')->plainTextToken;

            return response()->json([
                'user' => $user,
                'token' => $token
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        // Menghapus token yang sudah ada
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
