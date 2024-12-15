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
            'password' => ['required', 'string', 'min:3'], 
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect() -> route('home.page');
        } 
        
        $cekUserNumber = User::where('number_telephone', $request->number_telephone)->first();
        if(!$cekUserNumber) {
           return redirect() -> back()
           ->withErrors(['number_telephone' => 'Nomor telepon yang dimasukkan salah.'])
           ->with('message', 'your number is incorrect');
        }

        if (!Hash::check($request->password, $cekUserNumber->password)) {
            return redirect()->back()
            ->withErrors(['password' => 'Password yang dimasukkan salah.'])
            ->with('message', 'your password is incorrect');
        }
    }
}
