<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();
        return view('map', compact('mitras'));
    }
}