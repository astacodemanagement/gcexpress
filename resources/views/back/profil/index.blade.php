@extends('back.layouts.app')
@section('title', 'Halaman Profil')
@section('subtitle', 'Menu Profil')

@section('content')

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden"
                style="background: rgb(103, 115, 240);">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8" style="color:white">Profil Umum</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="color:white">
                                    <li class="breadcrumb-item"><a href="/" style="color:white">Beranda</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Profil Umum</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img src="{{ asset('themplete/back') }}/dist/images/breadcrumb/ChatBc.png" alt=""
                                    class="img-fluid mb-n4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="tab-umum-tab" data-bs-toggle="pill" data-bs-target="#tab-umum" type="button" role="tab"
                            aria-controls="tab-umum" aria-selected="true">
                            <i class="ti ti-user-circle me-2 fs-6"></i>
                            <span class="d-none d-md-block">Umum</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="tab-display-tab" data-bs-toggle="pill" data-bs-target="#tab-display" type="button"
                            role="tab" aria-controls="tab-display" aria-selected="false">
                            <i class="ti ti-camera me-2 fs-6"></i>
                            <span class="d-none d-md-block">Display</span>
                        </button>
                    </li>

                </ul>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tab-umum" role="tabpanel" aria-labelledby="tab-umum-tab"
                            tabindex="0">
                            <div class="row">

                                <div class="col-12">
                                    <div class="card w-100 position-relative overflow-hidden mb-0">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-semibold">Data Umum</h5>
                                            <p class="card-subtitle mb-4">Untuk mengubah detail data, edit dan simpan dari
                                                sini</p>
                                            <form id="updateProfilForm" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="nama_perusahaan" class="form-label fw-semibold">Nama
                                                                Perusahaan</label>
                                                            <input type="text" class="form-control" id="nama_perusahaan"
                                                                name="nama_perusahaan"
                                                                value="{{ $profil->nama_perusahaan }}"
                                                                placeholder="Ex : Jaya Saputra">

                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="no_telp" class="form-label fw-semibold">No
                                                                Telp</label>
                                                            <input type="number" class="form-control" id="no_telp"
                                                                name="no_telp" value="{{ $profil->no_telp }}"
                                                                placeholder="08500000000">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="email"
                                                                class="form-label fw-semibold">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" value="{{ $profil->email }}"
                                                                placeholder="maxima@gmail.com">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="no_wa" class="form-label fw-semibold">No
                                                                WA</label>
                                                            <input type="number" class="form-control" id="no_wa"
                                                                name="no_wa" value="{{ $profil->no_wa }}"
                                                                placeholder="08500000000">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="">
                                                            <label for="alamat"
                                                                class="form-label fw-semibold">Alamat</label>
                                                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4">{{ $profil->alamat }}</textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-display" role="tabpanel" aria-labelledby="tab-display-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card w-100 position-relative overflow-hidden mb-0">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-semibold">Data Display</h5>
                                            <p class="card-subtitle mb-4">Untuk mengubah detail data, edit dan simpan dari
                                                sini</p>

                                            <div class="row">
                                                <!-- Logo -->
                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label for="logo" class="form-label fw-semibold">Logo</label>
                                                        @if ($profil->logo && file_exists(public_path('upload/profil/' . $profil->logo)))
                                                            <div class="mb-2">
                                                                <a href="{{ asset('upload/profil/' . $profil->logo) }}"
                                                                    target="_blank">

                                                                    <img src="{{ asset('upload/profil/' . $profil->logo) }}"
                                                                        alt="Logo" class="img-thumbnail"
                                                                        style="max-height: 100px;">
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <input type="file" class="form-control" id="logo"
                                                            name="logo" onchange="previewImage()">

                                                        <canvas id="preview_canvas"
                                                            style="display: none; max-width: 100%; margin-top: 10px;"></canvas>
                                                        <img id="preview_image" src="#" alt="Preview Logo"
                                                            style="display: none; max-width: 100%; margin-top: 10px;">
                                                        <script>
                                                            function previewImage() {
                                                                var previewCanvas = document.getElementById('preview_canvas');
                                                                var previewImage = document.getElementById('preview_image');
                                                                var fileInput = document.getElementById('logo');
                                                                var file = fileInput.files[0];
                                                                var reader = new FileReader();

                                                                reader.onload = function(e) {
                                                                    var img = new Image();
                                                                    img.src = e.target.result;

                                                                    img.onload = function() {
                                                                        var canvasContext = previewCanvas.getContext('2d');
                                                                        var maxWidth = 100; // Max width untuk pratinja logo

                                                                        var scaleFactor = maxWidth / img.width;
                                                                        var newHeight = img.height * scaleFactor;

                                                                        previewCanvas.width = maxWidth;
                                                                        previewCanvas.height = newHeight;

                                                                        canvasContext.drawImage(img, 0, 0, maxWidth, newHeight);

                                                                        // Menampilkan pratinja logo setelah diperkecil
                                                                        previewCanvas.style.display = 'block';
                                                                        previewImage.style.display = 'none';
                                                                    };
                                                                };

                                                                if (file) {
                                                                    reader.readAsDataURL(file); // Membaca file yang dipilih sebagai URL data
                                                                } else {
                                                                    previewImage.src = '';
                                                                    previewCanvas.style.display = 'none'; // Menyembunyikan pratinja gambar jika tidak ada file yang dipilih
                                                                }
                                                            }
                                                        </script>





                                                    </div>
                                                </div>

                                                <!-- Favicon -->
                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label for="favicon"
                                                            class="form-label fw-semibold">Favicon</label>
                                                        @if ($profil->favicon && file_exists(public_path('upload/profil/' . $profil->favicon)))
                                                            <div class="mb-2">
                                                                <a href="{{ asset('upload/profil/' . $profil->favicon) }}"
                                                                    target="_blank">
                                                                    <img src="{{ asset('upload/profil/' . $profil->favicon) }}"
                                                                        alt="Favicon" class="img-thumbnail"
                                                                        style="max-height: 50px;">
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <input type="file" class="form-control" id="favicon"
                                                            name="favicon" onchange="previewImage2()">

                                                        <canvas id="preview_canvas2"
                                                            style="display: none; max-width: 100%; margin-top: 10px;"></canvas>
                                                        <img id="preview_image" src="#" alt="Preview Logo"
                                                            style="display: none; max-width: 100%; margin-top: 10px;">
                                                        <script>
                                                            function previewImage2() {
                                                                var previewCanvas2 = document.getElementById('preview_canvas2');
                                                                var previewImage2 = document.getElementById('preview_image');
                                                                var fileInput = document.getElementById('favicon');
                                                                var file = fileInput.files[0];
                                                                var reader = new FileReader();

                                                                reader.onload = function(e) {
                                                                    var img = new Image();
                                                                    img.src = e.target.result;

                                                                    img.onload = function() {
                                                                        var canvasContext = previewCanvas2.getContext('2d');
                                                                        var maxWidth = 50; // Max width untuk pratinja favicon

                                                                        var scaleFactor = maxWidth / img.width;
                                                                        var newHeight = img.height * scaleFactor;

                                                                        previewCanvas2.width = maxWidth;
                                                                        previewCanvas2.height = newHeight;

                                                                        canvasContext.drawImage(img, 0, 0, maxWidth, newHeight);

                                                                        // Menampilkan pratinja favicon setelah diperkecil
                                                                        previewCanvas2.style.display = 'block';
                                                                        previewImage.style.display = 'none';
                                                                    };
                                                                };

                                                                if (file) {
                                                                    reader.readAsDataURL(file); // Membaca file yang dipilih sebagai URL data
                                                                } else {
                                                                    previewImage.src = '';
                                                                    previewCanvas2.style.display = 'none'; // Menyembunyikan pratinja gambar jika tidak ada file yang dipilih
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>

                                                <!-- Banner -->
                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label for="banner"
                                                            class="form-label fw-semibold">Banner</label>
                                                        @if ($profil->banner && file_exists(public_path('upload/profil/' . $profil->banner)))
                                                            <div class="mb-2">
                                                                <a href="{{ asset('upload/profil/' . $profil->banner) }}"
                                                                    target="_blank">
                                                                    <img src="{{ asset('upload/profil/' . $profil->banner) }}"
                                                                        alt="Banner" class="img-thumbnail"
                                                                        style="max-height: 150px;">
                                                                </a>
                                                            </div>
                                                        @endif
                                                        <input type="file" class="form-control" id="banner"
                                                            name="banner" onchange="previewImage3()">
                                                            <canvas id="preview_canvas3"
                                                            style="display: none; max-width: 100%; margin-top: 10px;"></canvas>
                                                        <img id="preview_image" src="#" alt="Preview Logo"
                                                            style="display: none; max-width: 100%; margin-top: 10px;">
                                                        <script>
                                                            function previewImage3() {
                                                                var previewCanvas3 = document.getElementById('preview_canvas3');
                                                                var previewImage3 = document.getElementById('preview_image');
                                                                var fileInput = document.getElementById('banner');
                                                                var file = fileInput.files[0];
                                                                var reader = new FileReader();

                                                                reader.onload = function(e) {
                                                                    var img = new Image();
                                                                    img.src = e.target.result;

                                                                    img.onload = function() {
                                                                        var canvasContext = previewCanvas3.getContext('2d');
                                                                        var maxWidth = 150; // Max width untuk pratinja banner

                                                                        var scaleFactor = maxWidth / img.width;
                                                                        var newHeight = img.height * scaleFactor;

                                                                        previewCanvas3.width = maxWidth;
                                                                        previewCanvas3.height = newHeight;

                                                                        canvasContext.drawImage(img, 0, 0, maxWidth, newHeight);

                                                                        // Menampilkan pratinja favicon setelah diperkecil
                                                                        previewCanvas3.style.display = 'block';
                                                                        previewImage.style.display = 'none';
                                                                    };
                                                                };

                                                                if (file) {
                                                                    reader.readAsDataURL(file); // Membaca file yang dipilih sebagai URL data
                                                                } else {
                                                                    previewImage.src = '';
                                                                    previewCanvas3.style.display = 'none'; // Menyembunyikan pratinja gambar jika tidak ada file yang dipilih
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>

                                                <!-- Map -->
                                                <div class="col-12">
                                                    <div class="">
                                                        <label for="map" class="form-label fw-semibold">Map</label>
                                                        <textarea class="form-control" name="map" id="map" cols="30" rows="4">{{ $profil->map }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                <button type="submit" id="updateButton" class="btn btn-primary"><i
                                        class="fa fa-save"></i>
                                    Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>


    {{-- </div> --}}
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('#updateProfilForm').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                let id = '{{ $profil->id }}'; // Get profile ID

                // Disable the button to prevent multiple clicks
                let updateButton = $('#updateButton'); // Ganti dengan ID tombol yang sesuai
                updateButton.prop('disabled', true);
                updateButton.text('Updating...'); // Ubah teks tombol jika diperlukan

                $.ajax({
                    url: `/profil_umum/${id}`, // Ensure this is the correct route
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload(); // Reload page after success
                            }
                        });
                    },
                    error: function(xhr) {
                        // Mengambil pesan kesalahan dari respons
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '';

                        // Menyusun pesan kesalahan
                        $.each(errors, function(field, messages) {
                            errorMessages += messages.join(' ') +
                                '\n'; // Gabungkan pesan kesalahan
                        });

                        Swal.fire({
                            title: 'Error!',
                            text: errorMessages ||
                                'Failed to update the profile. Please check your inputs.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        console.log(xhr.responseText); // Log the error response for debugging
                    },
                    complete: function() {
                        // Re-enable the button after the request completes
                        updateButton.prop('disabled', false);
                        updateButton.text('Update'); // Kembalikan teks tombol ke semula
                    }
                });
            });
        });
    </script>
    
@endpush
