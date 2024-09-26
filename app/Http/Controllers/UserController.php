<?php

namespace App\Http\Controllers;

use App\Models\LogHistori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $title = "Halaman User";
        $subtitle = "Menu User";
        // Menampilkan daftar semua user
        $users = User::all();
        return view('back.users.index', compact('users','title','subtitle'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat user baru
        return view('users.create');
    }



    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'name' => 'required|unique:users,name',
                'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'password' => 'required|confirmed|min:6', // Pastikan password dan confirmation cocok
            ], [
                'name.required' => 'Nama user wajib diisi.',
                'name.unique' => 'Nama user sudah ada.',
                'profile_image.image' => 'Gambar harus dalam format jpeg, jpg, atau png',
                'profile_image.mimes' => 'Format gambar harus jpeg, jpg, atau png',
                'profile_image.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
                'password.required' => 'Password wajib diisi.',
                'password.confirmed' => 'Password dan konfirmasi password tidak cocok.',
                'password.min' => 'Password minimal 6 karakter.'
            ]);

            // Ambil semua data kecuali password_confirmation
            $input = $request->except(['password_confirmation']);

            // Hash password
            $input['password'] = Hash::make($request->password);

            // Jika ada file gambar, proses gambar
            if ($image = $request->file('profile_image')) {
                $destinationPath = 'upload/user/';

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
                        $input['profile_image'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                    } else {
                        throw new \Exception('Gagal membaca gambar asli.');
                    }
                } else {
                    throw new \Exception('Tipe MIME gambar tidak didukung.');
                }
            } else {
                $input['profile_image'] = ''; // Jika tidak ada gambar yang diunggah
            }

            // Membuat user baru
            $user = User::create($input);

            // Simpan log histori untuk operasi Create
            $loggedInUserId = Auth::id();
            $this->simpanLogHistori('Create', 'User', $user->id, $loggedInUserId, null, json_encode($user));

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
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi input
            $request->validate([
                'name' => 'required',
                'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'password' => 'nullable|min:6|confirmed',
            ], [
                'name.required' => 'Nama user wajib diisi.',
                'profile_image.image' => 'Gambar harus dalam format jpeg, jpg, atau png',
                'profile_image.mimes' => 'Format gambar harus jpeg, jpg, atau png',
                'profile_image.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
                'password.min' => 'Password minimal 6 karakter.',
                'password.confirmed' => 'Konfirmasi password tidak cocok.',
            ]);

            // Ambil data user yang akan diupdate
            $user = User::findOrFail($id);

            // Setel data yang akan diupdate
            $input = $request->except(['_token', '_method', 'password_confirmation']);

            // Cek apakah password diisi dan hash password baru jika diisi
            if ($request->filled('password')) {
                $input['password'] = Hash::make($request->input('password'));
            } else {
                unset($input['password']);
            }

            // Jika ada file gambar, proses gambar
            if ($image = $request->file('profile_image')) {
                $destinationPath = 'upload/user/';

                // Hapus gambar lama jika ada
                if ($user->profile_image) {
                    $oldImagePath = public_path($destinationPath . $user->profile_image);
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
                        $input['profile_image'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                    } else {
                        throw new \Exception('Gagal membaca gambar asli.');
                    }
                } else {
                    throw new \Exception('Tipe MIME gambar tidak didukung.');
                }
            }

            // Update data user
            $user->update($input);

            // Simpan log histori untuk operasi Update dengan user_id yang sedang login
            $loggedInUserId = Auth::id();
            $this->simpanLogHistori('Update', 'User', $user->id, $loggedInUserId, json_encode($user->getOriginal()), json_encode($input));

            // Beri respons JSON jika berhasil
            return response()->json(['message' => 'Data berhasil diupdate'], 200);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, tangkap dan kembalikan pesan error
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }





    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Data user not found'], 404);
        }

        $oldgambarFileName = $user->profile_image; // Nama file saja
        $oldfilePath = public_path('upload/user/' . $oldgambarFileName);

        if ($oldgambarFileName && file_exists($oldfilePath)) {
            unlink($oldfilePath);
        }

        $user->delete();
        $loggedInUserId = Auth::id();

        // Simpan log histori untuk operasi Delete dengan user_id yang sedang login dan informasi data yang dihapus
        $this->simpanLogHistori('Delete', 'user', $id, $loggedInUserId, json_encode($user), null);

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
