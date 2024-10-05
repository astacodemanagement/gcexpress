<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Berita;
use App\Models\Faq;
use App\Models\KategoriBerita;
use App\Models\Layanan;
use App\Models\Mitra;
use App\Models\Slider;
use App\Models\Tahap;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $title = "Halaman Beranda";
        $subtitle = "Menu Beranda";
        $slider = Slider::orderBy('urutan', 'asc')->get();
        $layanan = Layanan::orderBy('urutan', 'asc')->get();
        $tahap = Tahap::orderBy('urutan', 'asc')->get();
        $mitra = Mitra::orderBy('urutan', 'asc')->get();
        $alasan = Alasan::orderBy('urutan', 'asc')->get();
        $faq = Faq::orderBy('urutan', 'asc')->get();
        $kategoriBerita = KategoriBerita::all();
        $berita = Berita::orderBy('id', 'desc')->paginate(4)->withQueryString();
        $berita2 = Berita::orderBy('id', 'desc')->take(2)->get();




        return view('front.beranda', compact('title', 'subtitle', 'slider', 'layanan', 'mitra', 'berita', 'berita2', 'faq',  'tahap','alasan', 'kategoriBerita'));
    }

    public function halaman_berita()
    {
        $title = "Halaman Berita";
        $subtitle = "Menu Berita";

        $berita = Berita::with('kategoriBerita')->orderBy('id', 'desc')->paginate(10);

        return view('front.berita.index', compact('title', 'subtitle', 'berita'));
    }





    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
