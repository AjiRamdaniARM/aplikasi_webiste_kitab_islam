<?php

namespace App\Http\Controllers\admin\KitabsController;

use App\Http\Controllers\Controller;
use App\Models\IslamiKitab;


class KitabsController extends Controller
{
    //  controller delete kitabs & content 
    public function delete($nama_kitabs) {
        try {
            $kitab = IslamiKitab::where('name_kitabs', $nama_kitabs)->first();
            $kitab->delete();
            return redirect()->back()->with('message', 'Kitabs deleted successfully!');

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
