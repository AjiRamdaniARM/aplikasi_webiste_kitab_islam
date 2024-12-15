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
            return redirect() -> route('dashboard');
        } 
        
        $cekUserNumber = User::where('number_telephone', $request->number_telephone)->first();
        if(!$cekUserNumber) {
           return redirect() -> back()
           ->withInput(
            $request->except('number_telephone'))
           ->withErrors(['number_telephone' => 'Nomor telepon yang dimasukkan salah.'])
           ->with('message', 'your number is incorrect');
        }

        if (!Hash::check($request->password, $cekUserNumber->password)) {
            return redirect()->back()
            ->withInput()  
            ->withErrors(['password' => 'Password yang dimasukkan salah.'])
            ->with('message', 'your password is incorrect');
        }
    }
}
