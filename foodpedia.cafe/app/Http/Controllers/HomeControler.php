<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function home()
    {
        $kategori = kategori::all();
        return view('Home', compact('kategori'));
    }
}
