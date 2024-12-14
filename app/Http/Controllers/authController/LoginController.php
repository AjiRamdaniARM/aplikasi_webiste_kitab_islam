<?php

namespace App\Http\Controllers\authController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'number_telephone' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:6'], 
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect() -> route('home.page');
        } 
        
        $cekUserNumber = User::where('number_telephone', $request->number_telephone)->first();
        if(!$cekUserNumber) {
            return response()->json([
                'message' => 'Login failed',
                'errors' => [
                    'phone_number' => ['Nomor telepon tidak ditemukan.'],
                ],
            ], 404);
        }

        if (!Hash::check($request->password, $cekUserNumber->password)) {
            // Jika password salah
            return response()->json([
                'message' => 'Login failed',
                'errors' => [
                    'password' => ['Password yang dimasukkan salah.'],
                ],
            ], 401);
        }
 
    }
}