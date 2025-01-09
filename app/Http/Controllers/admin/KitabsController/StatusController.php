<?php

namespace App\Http\Controllers\admin\KitabsController;

use App\Http\Controllers\Controller;
use App\Models\StatusKitab;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name_status' => 'required|string|max:255',
        ]);
        StatusKitab::create([
            'name_status' => $request->name_status,
        ]);
        return response()->json(['message' => 'Data berhasil disimpan!'], 200);
    }
}
