<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function update(Request $request, $username)
    {
        try {
            // Validasi data input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'nullable|string|max:14',
                'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
                'password' => 'nullable|string|min:6|confirmed',
                'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
    
            // Ambil user yang sedang login
            $user = Auth::user();
    
            // Update data user
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->number_telephone = $validated['phone'];
    
            // Update password jika diisi
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            // Proses gambar profil jika ada
            if ($request->hasFile('profile_image')) {
                // Hapus gambar lama jika ada
                if ($user->profile) {
                    $oldImagePath = public_path('admin/profile/' . $user->profile);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                // Simpan gambar baru
                $file = $request->file('profile_image');
                $fileName = $user->name . '_' . $file->getClientOriginalName(); // Nama unik untuk file
                $destinationPath = public_path('admin/profile'); // Lokasi penyimpanan
                $file->move($destinationPath, $fileName);
                $user->profile = $fileName;
            }
    
            // Simpan perubahan data user
            $user->save();
    
            // Berikan pesan sukses
            return redirect()->back()->with('message', 'Profile updated successfully!');
        } catch (\Exception $e) {
            // Tangani error
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}