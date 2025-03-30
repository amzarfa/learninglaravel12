<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // // Validasi input
        // $request->validate([
        //     'email'    => 'required|email',
        //     'password' => 'required',
        // ]);

        // // Cek kredensial
        // if (!Auth::attempt($request->only('email', 'password'))) {
        //     return response()->json([
        //         'message' => 'Email atau password salah.'
        //     ], 401);
        // }

        // // Ambil user yang sudah login
        // $user = $request->user();

        // // Buat token untuk API dengan Sanctum
        // $token = $user->createToken('API Token')->plainTextToken;

        // // Kembalikan respon JSON dengan token
        // return response()->json([
        //     'access_token' => $token,
        //     'token_type'   => 'Bearer'
        // ]);

        // Validasi input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Email atau password salah.'
            ], 401);
        }

        // Ambil user yang sudah login
        $user = $request->user();

        // Buat token untuk API dengan Sanctum
        $fullToken = $user->createToken('API Token')->plainTextToken;
        // Memisahkan id dan token dengan explode pada tanda "|"
        [$id, $plainToken] = explode('|', $fullToken);

        // Kembalikan respon JSON dengan token (tanpa prefix), serta name dan email user
        return response()->json([
            'access_token' => $plainToken,
            'token_type'   => 'Bearer',
            'name'         => $user->name,
            'email'        => $user->email,
        ]);
    }
}
