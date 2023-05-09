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

    public function About()
    {
        $kategori = kategori::all();
        return view('about',compact('kategori'));
    }

    public function Reservasi()
    {
        $kategori = kategori::all();
        return view('reservasi',compact('kategori'));
    }
}


