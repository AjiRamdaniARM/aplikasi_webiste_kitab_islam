<?php

namespace App\Http\Controllers\DetailKitabs;

use App\Http\Controllers\Controller;
use App\Models\ContentKitab;
use App\Models\IslamiKitab;
use App\Models\LatinArabs;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($name_kitabs)
    {
        // Cari kitab berdasarkan nama
        $getNameKitabs = IslamiKitab::where('name_kitabs', $name_kitabs)->firstOrFail();
    
        // Cari konten kitab berdasarkan id_islami_kitabs
        $getContentKitabs = ContentKitab::where('id_islami_kitabs', $getNameKitabs->id)->firstOrFail();
    
        // Ambil data LatinArabs berdasarkan id_latin_arabs dari ContentKitab
        $getData = LatinArabs::where('id', $getContentKitabs->	id_latin_arabs )->get();
    
        return view('components.pages.detail-kitabs.index', compact('getData'));
    }
    
}
