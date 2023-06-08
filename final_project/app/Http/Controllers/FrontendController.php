<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\keranjang;

class FrontendController extends Controller
{

    public function AllPesanan()
    {
        $kategori = Kategori::all();
        $krnjg = keranjang::get();
        return view('Admin.pesanan.all', compact('krnjg','kategori'));
    }
    public function index()
    {
        $krnjg = keranjang::get();
        $kategori = Kategori::all();
        return view('User.Home', compact('krnjg','kategori'));
    }
    public function User()
    {
        $kategori = Kategori::all();
        return view('User.Home', compact('kategori'));
    }

    public function aboutus()
    {
        $kategori = Kategori::all();
        return view('User.about', compact('kategori'));
    }

    public function reservasi()
    {
        $kategori = Kategori::all();
        return view('User.reservasi', compact('kategori'));
    }

    public function Kategori($slug)
    {
        $kategori = Kategori::all();
        $kategoris = Kategori::where('slug', $slug)->firstOrFail();
        $item = $kategoris->produk()->get();

        return view('User.menukategori', compact('kategori', 'item'));
    }

    public function pesanan()
    {
        $kategori = Kategori::all();
        $keranjang = keranjang::where('user_id', auth()->user()->id)->get();
        return view('User.daftarpesanan', compact('kategori', 'keranjang'));
    }

    public function tambahpesanan(Request $request)
    {
        // keranjang::Insert([
        //     'user_id' => $request->user()->id,
        //     'id' => $request->product_id,
        //     'product_nama' => $request->product_name,
        //     'price' => $request->price,
        // ]);
        $keranjang = new keranjang;
        $keranjang->user_id = $request->user()->id;
        $keranjang->product_nama = $request->product_name;
        $keranjang->price = $request->price;

        $keranjang->save();

        return redirect()->route('pesanan')->with('message', 'Barang Berhasil Ditambahkan ke Keranjang');
    }
    public function deletePesanan($id)
    {
        // Logic to delete the pesanan from the database based on the $id
        // For example:
        keranjang::find($id)->delete();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Pesanan deleted successfully.');
    }
    public function statuspemesanan(Request $request, $id)
    {
        $data = keranjang::find($id);

        if ($request->has('status')) {
            $status = $request->status;
            if ($status == 1) {
                    $data->status = 1; //
            } elseif ($status == 2) {
                $data->status = 2; // Ditolak
            } else {
                $data->status = 0; // Menunggu
            }
        }

        $data->save();
        return redirect()->back()->with('message', 'Status Pemesanan Berhasil Diubah');
    }

}
