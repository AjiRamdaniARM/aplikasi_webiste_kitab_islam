<?php

namespace App\Http\Controllers\DetailKitabs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index ($name_kitabs) {
        return view ('components.pages.detail-kitabs.index');
    }
}
