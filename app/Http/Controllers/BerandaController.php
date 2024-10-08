<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Berita;
use App\Models\Dokumentasi;
use App\Models\Faq;
use App\Models\KategoriBerita;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\Mitra;
use App\Models\Slider;
use App\Models\Tahap;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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




        return view('front.beranda', compact('title', 'subtitle', 'slider', 'layanan', 'mitra', 'berita', 'berita2', 'faq',  'tahap', 'alasan', 'kategoriBerita'));
    }

    public function halaman_berita()
    {
        $title = "Halaman Berita";
        $subtitle = "Menu Berita";



        return view('front.pendaftaran.index', compact('title', 'subtitle'));
    }

    public function pendaftaran()
    {
        $title = "Halaman Pendaftaran";
        $subtitle = "Menu Pendaftaran";



        return view('front.pendaftaran.index', compact('title', 'subtitle'));
    }

    public function login()
    {
        $title = "Halaman Login";
        $subtitle = "Menu Login";



        return view('front.login.index', compact('title', 'subtitle'));
    }

    public function dokumentasi_umum()
    {
        $title = "Halaman Dokumentasi";
        $subtitle = "Menu Dokumentasi";
        $dokumentasi = Dokumentasi::orderBy('urutan', 'asc')->get();

        return view('front.dokumentasi.index', compact('title', 'subtitle','dokumentasi'));
    }





    public function create() {}

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'kategori_konsumen' => 'required|string',
            'nama_perusahaan' => 'nullable|string|max:255', // Optional jika kategori konsumen 'corporate'
            'jenis_kelamin' => 'required|string|in:Pria,Wanita', // Validasi opsi yang diterima
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:8|confirmed',
            'no_wa' => 'required|string|max:15',
            'alamat' => 'required|string|max:500', // Maksimal panjang 500 karakter untuk alamat
            'tanggal_lahir' => 'required|date',
            'kode_referal' => 'nullable|string|max:10', // Referal tidak wajib diisi
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi.',
            'nama_lengkap.string' => 'Nama Lengkap harus berupa teks.',
            'nama_lengkap.max' => 'Nama Lengkap maksimal 255 karakter.',

            'kategori_konsumen.required' => 'Kategori Konsumen wajib diisi.',
            'kategori_konsumen.string' => 'Kategori Konsumen harus berupa teks.',

            'nama_perusahaan.string' => 'Nama Perusahaan harus berupa teks.',
            'nama_perusahaan.max' => 'Nama Perusahaan maksimal 255 karakter.',

            'jenis_kelamin.required' => 'Jenis Kelamin wajib dipilih.',
            'jenis_kelamin.in' => 'Jenis Kelamin harus Pria atau Wanita.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa format yang valid.',
            'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
            'email.max' => 'Email maksimal 255 karakter.',

            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',

            'no_wa.required' => 'Nomor WhatsApp wajib diisi.',
            'no_wa.string' => 'Nomor WhatsApp harus berupa teks.',
            'no_wa.max' => 'Nomor WhatsApp maksimal 15 karakter.',

            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal 500 karakter.',

            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'tanggal_lahir.date' => 'Tanggal Lahir harus berupa tanggal yang valid.',

            'kode_referal.string' => 'Kode Referal harus berupa teks.',
            'kode_referal.max' => 'Kode Referal maksimal 10 karakter.',
        ]);

        // Simpan data ke dalam tabel users dengan hanya email dan password
        $user = User::create([
            'email' => $request->email,
            'name' => $request->nama_lengkap,
            'password' => Hash::make($request->password), // pastikan password di-hash
        ]);

        // Simpan data tambahan ke dalam tabel member
        Member::create([
            'user_id' => $user->id, // Foreign key ke tabel users
            'nama_lengkap' => $request->nama_lengkap,
            'kategori_konsumen' => $request->kategori_konsumen,
            'nama_perusahaan' => $request->kategori_konsumen === 'corporate' ? $request->nama_perusahaan : null,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_wa' => $request->no_wa,
            'alamat' => $request->alamat,
            'kode_referal' => $request->kode_referal, // jika field ini ada di tabel
        ]);

        // Setelah data tersimpan, arahkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan!');
    }



    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
