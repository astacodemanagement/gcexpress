<?php

namespace App\Http\Controllers;

use App\Models\LogHistori;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BeritaController extends Controller
{
    public function index()
    {
        $title = "Halaman Berita";
        $subtitle = "Menu Berita";
        $kategoriBerita = KategoriBerita::all();
        $berita = Berita::all();
        return view('back.berita.index', compact('berita','title','subtitle','kategoriBerita'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat berita baru
        return view('berita.create');
    }



    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'judul_berita' => 'required|unique:berita,judul_berita',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            ], [
                'judul_berita.required' => 'Nama Berita wajib diisi.',
                'judul_berita.unique' => 'Nama Berita sudah ada.',
                'gambar.required' => 'Gambar Sldier wajib diisi.',
                'gambar.image' => 'Gambar harus dalam format jpeg, jpg, atau png',
                'gambar.mimes' => 'Format gambar harus jpeg, jpg, atau png',
                'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',

            ]);

            $input = $request->all();

            // Jika ada file gambar, proses gambar
            if ($image = $request->file('gambar')) {
                $destinationPath = 'upload/berita/';

                $originalFileName = $image->getClientOriginalName();
                $imageMimeType = $image->getMimeType();

                if (strpos($imageMimeType, 'image/') === 0) {
                    $imageName = date('YmdHis') . '_' . str_replace(' ', '_', $originalFileName);
                    $image->move($destinationPath, $imageName);

                    $sourceImagePath = public_path($destinationPath . $imageName);
                    $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

                    switch ($imageMimeType) {
                        case 'image/jpeg':
                            $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                            break;
                        case 'image/png':
                            $sourceImage = @imagecreatefrompng($sourceImagePath);
                            break;
                        default:
                            throw new \Exception('Tipe MIME tidak didukung.');
                    }

                    if ($sourceImage !== false) {
                        imagewebp($sourceImage, $webpImagePath);
                        imagedestroy($sourceImage);
                        @unlink($sourceImagePath);
                        $input['gambar'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                    } else {
                        throw new \Exception('Gagal membaca gambar asli.');
                    }
                } else {
                    throw new \Exception('Tipe MIME gambar tidak didukung.');
                }
            } else {
                $input['gambar'] = ''; // Jika tidak ada gambar yang diunggah
            }

            // Membuat berita baru
            $berita = Berita::create($input);

            // Simpan log histori untuk operasi Create
            $loggedInBeritaId = Auth::id();
            $this->simpanLogHistori('Create', 'Berita', $berita->id, $loggedInBeritaId, null, json_encode($berita));

            return response()->json(['message' => 'Data berhasil disimpan'], 201);

        } catch (\Exception $e) {
            // Tangani error dan kembalikan respons error
            return response()->json([
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }



    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return response()->json($berita);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi input
            $request->validate([
                'judul_berita' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'judul_berita.required' => 'Nama Berita wajib diisi.',
                'gambar.image' => 'Gambar harus dalam format jpeg, jpg, atau png',
                'gambar.mimes' => 'Format gambar harus jpeg, jpg, atau png',
                'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
            ]);

            // Ambil data berita yang akan diupdate
            $berita = Berita::findOrFail($id);

            // Inisialisasi input dari request
            $input = $request->all();

            // Jika ada file gambar, proses gambar
            if ($image = $request->file('gambar')) {
                $destinationPath = 'upload/berita/';

                // Hapus gambar lama jika ada
                if ($berita->gambar) {
                    $oldImagePath = public_path($destinationPath . $berita->gambar);
                    if (file_exists($oldImagePath)) {
                        @unlink($oldImagePath); // Hapus gambar lama
                    }
                }

                // Ambil nama file asli dan ekstensinya
                $originalFileName = $image->getClientOriginalName();
                $imageMimeType = $image->getMimeType();

                // Hanya tipe MIME gambar yang didukung
                if (strpos($imageMimeType, 'image/') === 0) {
                    // Generate nama file baru
                    $imageName = date('YmdHis') . '_' . str_replace(' ', '_', $originalFileName);
                    $image->move($destinationPath, $imageName);

                    // Path file asli dan WebP
                    $sourceImagePath = public_path($destinationPath . $imageName);
                    $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

                    // Konversi gambar ke WebP
                    switch ($imageMimeType) {
                        case 'image/jpeg':
                            $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                            break;
                        case 'image/png':
                            $sourceImage = @imagecreatefrompng($sourceImagePath);
                            break;
                        default:
                            throw new \Exception('Tipe MIME tidak didukung.');
                    }

                    if ($sourceImage !== false) {
                        // Simpan sebagai WebP dan hapus file asli
                        imagewebp($sourceImage, $webpImagePath);
                        imagedestroy($sourceImage);
                        @unlink($sourceImagePath);

                        // Simpan nama file WebP ke database
                        $input['gambar'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                    } else {
                        throw new \Exception('Gagal membaca gambar asli.');
                    }
                } else {
                    throw new \Exception('Tipe MIME gambar tidak didukung.');
                }
            }

            // Update data berita
            $berita->update($input);

            // Simpan log histori untuk operasi Update dengan berita_id yang sedang login
            $loggedInBeritaId = Auth::id();
            $this->simpanLogHistori('Update', 'Berita', $berita->id, $loggedInBeritaId, json_encode($berita->getOriginal()), json_encode($input));

            // Beri respons JSON jika berhasil
            return response()->json(['message' => 'Data berhasil diupdate'], 200);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, tangkap dan kembalikan pesan error
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }






    public function destroy($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return response()->json(['message' => 'Data berita not found'], 404);
        }

        $oldgambarFileName = $berita->gambar; // Nama file saja
        $oldfilePath = public_path('upload/berita/' . $oldgambarFileName);

        if ($oldgambarFileName && file_exists($oldfilePath)) {
            unlink($oldfilePath);
        }

        $berita->delete();
        $loggedInBeritaId = Auth::id();

        // Simpan log histori untuk operasi Delete dengan berita_id yang sedang login dan informasi data yang dihapus
        $this->simpanLogHistori('Delete', 'berita', $id, $loggedInBeritaId, json_encode($berita), null);

        return response()->json(['message' => 'Data Berhasil Dihapus']);
    }

    private function simpanLogHistori($aksi, $tabelAsal, $idEntitas, $pengguna, $dataLama, $dataBaru)
    {
        $log = new LogHistori();
        $log->tabel_asal = $tabelAsal;
        $log->id_entitas = $idEntitas;
        $log->aksi = $aksi;
        $log->waktu = now(); // Menggunakan waktu saat ini
        $log->pengguna = $pengguna;
        $log->data_lama = $dataLama;
        $log->data_baru = $dataBaru;
        $log->save();
    }
}
