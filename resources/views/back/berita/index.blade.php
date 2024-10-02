@extends('back.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@push('css')
    <link rel="stylesheet"
        href="{{ asset('themplete/back') }}/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('themplete/back') }}/dist/libs/select2/dist/css/select2.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
        integrity="sha512-xrbX64SIXOxo5cMQEDUQ3UyKsCreOEq1Im90z3B7KPoxLJ2ol/tCT0aBhuIzASfmBVdODioUdUPbt5EDEXmD9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('themplete/back') }}/dist/libs/summernote/dist/summernote-lite.min.css">
@endpush
@push('css')
    <style>
        .select2-container .select2-selection--single .select2-selection__rendered {
            margin-top: 0.5rem;
        }

        /* .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
                                                                                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2378829D' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
                                                                                background-color: transparent;
                                                                                background-size: contain;
                                                                                border: none !important;
                                                                                height: 12px !important;
                                                                                width: 12px !important;
                                                                                margin: auto !important;
                                                                                top: 16px !important;
                                                                                left: -13px !important;
                                                                            }

                                                                            .select2-container--open .select2-selection__arrow b {
                                                                                transform: rotate(180deg) !important;
                                                                            } */

        .select2-container--bootstrap .select2-selection--single {
            height: 39px !important;
            /* line-height: 25px !important; */
        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
            color: #5a6a85;
            /* font-weight: 500; */
            font-size: .765625rem;
        }

        .select2-container--bootstrap .select2-selection {
            -webkit-box-shadow: usnet;
            box-shadow: unset;
            background-color: #fff;
            border: 1px solid var(--bs-gray-300);
            border-radius: var(--bs-border-radius-sm);
            color: #5a6a85;
        }

        /* .select2-container .select2-selection--single .select2-selection__rendered {
                                                                                            padding-left: 16px !important
                                                                                        } */
        .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
            position: absolute;
            bottom: 0;
            right: 18px;
            top: 20px;

        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            background-color: transparent;
            background-size: contain;
            border: none !important;
            height: 12px !important;
            width: 12px !important;
            margin: auto !important;
            top: 14px !important;
            left: -13px !important;
            position: absolute
        }

        .select2-search--dropdown .select2-search__field {
            border: solid 1px #dfe5ef
        }

        .select2-dropdown {
            border: solid 1px #dfe5ef !important;
        }

        .select2-container--open {
            font-size: .76rem
        }

        body .select2-results__option {
            padding: 10px 10px;
        }
    </style>
@endpush


@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden"
                style="background: rgb(103, 115, 240);">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8" style="color:white">{{ $title }}</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="color:white">
                                    <li class="breadcrumb-item"><a href="/" style="color:white">Beranda</a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
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

            <section class="datatables">
                <!-- File export -->
                <div class="row">
                    <div class="col-12">
                        <!-- ---------------------
                                                                                                                                                                                start File export
                                                                                                                                                                            ---------------- -->
                        <div class="card">
                            <div class="card-body">

                                <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal"
                                    data-bs-target="#modal-tambah">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </a>

                                <div class="table-responsive">
                                    <table id="file_export"
                                        class="table border table-striped table-bordered display text-nowrap">
                                        <thead>
                                            <!-- start row -->
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori Berita</th>
                                                <th>Judul Berita</th>
                                                <th>Tanggal Posting</th>
                                                <th>Status</th>
                                                <th width="10%">Gambar</th>
                                                <th width="15%">Aksi</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            @foreach ($berita as $p)
                                                <!-- start row -->
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->kategoriBerita->nama_kategori_berita }}</td>
                                                    <td>{{ $p->judul_berita }}</td>
                                                    <td>{{ $p->tanggal_posting }}</td>
                                                    <td>{{ $p->status }}</td>
                                                    <td><a href="/upload/berita/{{ $p->gambar }}" target="_blank"><img
                                                                style="max-width:100px; max-height:100px"
                                                                src="/upload/berita/{{ $p->gambar }}"
                                                                alt=""></a></td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-warning btn-edit"
                                                            data-bs-toggle="modal" data-bs-target="#modal-edit"
                                                            data-id="{{ $p->id }}" style="color: black">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <button class="btn btn-sm btn-danger btn-hapus"
                                                            data-id="{{ $p->id }}" style="color: white">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>

                                                    </td>
                                                </tr>
                                                <!-- end row -->
                                            @endforeach



                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------end File export---------------- -->



                    </div>
                </div>
            </section>

        </div>
    </div>

    {{-- Modal Tambah Data --}}
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form {{ $subtitle }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Main content -->

                    <div class="card card-primary">
                        <!-- form start -->
                        <form id="form-tambah" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="tanggal_posting" class="form-label fw-semibold">Tanggal
                                                Posting</label>
                                            <span class="text-danger">*</span> <!-- Menambahkan span untuk keterangan -->
                                            <input type="date" class="form-control" id="tanggal_posting"
                                                name="tanggal_posting" value="{{ now()->format('Y-m-d') }}" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="judul_berita" class="form-label fw-semibold">Judul Berita</label>
                                            <input type="text" class="form-control" id="judul_berita"
                                                name="judul_berita" placeholder="Ex : Pendidikan Priority">
                                        </div>
                                    </div>
                                    <div class="col-6" hidden>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="penulis" class="form-label fw-semibold">Penulis Berita</label>
                                            <input type="text" class="form-control" id="penulis" name="penulis"
                                                placeholder="Ex : Rahmat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="kategori_berita_id"
                                                class="form-label fw-semibold">Kategori</label>
                                            <select class="form-control" name="kategori_berita_id"
                                                id="kategori_berita_id" required style="width: 100%; height: 36px">
                                                <option value="">--Pilih Kategori--</option>
                                                @foreach ($kategoriBerita as $kategori)
                                                    <option value="{{ $kategori->id }}">
                                                        {{ $kategori->nama_kategori_berita }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="ringkasan" class="form-label fw-semibold">Ringkasan Berita</label>
                                            <input type="text" class="form-control" id="ringkasan" name="ringkasan"
                                                placeholder="Ex : Berita Ini adalah ...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="urutan" class="form-label fw-semibold">Urutan</label>

                                            <input type="number" class="form-control" id="urutan" name="urutan"
                                                placeholder="Ex : 1">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="isi" class="form-label fw-semibold">Isi</label>
                                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                            <span class="text-danger">*</span>
                                            <input type="file" class="form-control" id="gambar" name="gambar"
                                                onchange="previewImage()">

                                            <canvas id="preview_canvas"
                                                style="display: none; max-width: 100%; margin-top: 10px;"></canvas>
                                            <img id="preview_image" src="#" alt="Preview Logo"
                                                style="display: none; max-width: 100%; margin-top: 10px;">
                                            <script>
                                                function previewImage() {
                                                    var previewCanvas = document.getElementById('preview_canvas');
                                                    var previewImage = document.getElementById('preview_image');
                                                    var fileInput = document.getElementById('gambar');
                                                    var file = fileInput.files[0];
                                                    var reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        var img = new Image();
                                                        img.src = e.target.result;

                                                        img.onload = function() {
                                                            var canvasContext = previewCanvas.getContext('2d');
                                                            var maxWidth = 150; // Max width untuk pratinja gambar

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
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="sumber" class="form-label fw-semibold">Sumber Berita</label>
                                            <input type="text" class="form-control" id="sumber" name="sumber"
                                                placeholder="Ex : Detik.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="status" class="form-label fw-semibold">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="">--Pilih Status--</option>
                                                <option value="Aktif" selected>
                                                    Aktif
                                                </option>
                                                <option value="Non Aktif">
                                                    Non Aktif
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="btn-save-tambah"><i
                                            class="fas fa-save"></i>
                                        Simpan</button>
                                    <button type="button" class="btn btn-danger float-right"
                                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span>
                                        Tutup</button>

                                </div>

                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- Modal Edit Data --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form {{ $subtitle }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Main content -->

                    <div class="card card-primary">


                        <form id="form-edit" action="" method="POST">
                            @method('PUT')
                            @csrf
                            <input type="hidden" id="id" name="id" />
                            <!-- Input hidden untuk menyimpan ID -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="tanggal_posting_edit" class="form-label fw-semibold">Tanggal
                                                Posting</label>
                                            <span class="text-danger">*</span> <!-- Menambahkan span untuk keterangan -->
                                            <input type="date" class="form-control" id="tanggal_posting_edit"
                                                name="tanggal_posting" value="{{ now()->format('Y-m-d') }}" required>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="judul_berita_edit" class="form-label fw-semibold">Judul
                                                Berita</label>
                                            <input type="text" class="form-control" id="judul_berita_edit"
                                                name="judul_berita" placeholder="Ex : Pendidikan Priority">
                                        </div>
                                    </div>
                                    <div class="col-6" hidden>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" class="form-control" id="slug_edit" name="slug"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="penulis_edit" class="form-label fw-semibold">Penulis
                                                Berita</label>
                                            <input type="text" class="form-control" id="penulis_edit" name="penulis"
                                                placeholder="Ex : Rahmat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="kategori_berita_id_edit"
                                                class="form-label fw-semibold">Kategori</label>
                                            <select class="form-control" name="kategori_berita_id"
                                                id="kategori_berita_id_edit" required style="width: 100%; height: 36px">
                                                <option value="">--Pilih Kategori--</option>
                                                @foreach ($kategoriBerita as $kategori)
                                                    <option value="{{ $kategori->id }}">
                                                        {{ $kategori->nama_kategori_berita }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="ringkasan_edit" class="form-label fw-semibold">Ringkasan
                                                Berita</label>
                                            <input type="text" class="form-control" id="ringkasan_edit"
                                                name="ringkasan" placeholder="Ex : Berita Ini adalah ...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="urutan_edit" class="form-label fw-semibold">Urutan</label>

                                            <input type="number" class="form-control" id="urutan_edit" name="urutan"
                                                placeholder="Ex : 1">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="isi" class="form-label fw-semibold">Isi</label>
                                            <textarea class="form-control" id="isi_edit" name="isi" cols="30" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                            <span class="text-danger">*</span>
                                            <input type="file" class="form-control" id="gambar" name="gambar"
                                                onchange="previewImage()">

                                            <canvas id="preview_canvas"
                                                style="display: none; max-width: 100%; margin-top: 10px;"></canvas>
                                            <img id="preview_image" src="#" alt="Preview Logo"
                                                style="display: none; max-width: 100%; margin-top: 10px;">
                                            <script>
                                                function previewImage() {
                                                    var previewCanvas = document.getElementById('preview_canvas');
                                                    var previewImage = document.getElementById('preview_image');
                                                    var fileInput = document.getElementById('gambar');
                                                    var file = fileInput.files[0];
                                                    var reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        var img = new Image();
                                                        img.src = e.target.result;

                                                        img.onload = function() {
                                                            var canvasContext = previewCanvas.getContext('2d');
                                                            var maxWidth = 150; // Max width untuk pratinja gambar

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
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="sumber_edit" class="form-label fw-semibold">Sumber Berita</label>
                                            <input type="text" class="form-control" id="sumber_edit" name="sumber"
                                                placeholder="Ex : Detik.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="status_edit" class="form-label fw-semibold">Status</label>
                                            <select class="form-control" name="status" id="status_edit">
                                                <option value="">--Pilih Status--</option>
                                                <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif
                                                </option>
                                                <option value="Non Aktif"
                                                    {{ old('status') == 'Non Aktif' ? 'selected' : '' }}>
                                                    Non Aktif
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="btn-save-edit"><i
                                            class="fas fa-save"></i>
                                        Update</button>
                                    <button type="button" class="btn btn-danger float-right"
                                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span>
                                        Tutup</button>

                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>







@endsection



@push('scripts')
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('themplete/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('themplete/back') }}/dist/js/custom.js"></script>
    <script src="{{ asset('themplete/back') }}/dist/libs/prismjs/prism.js"></script>
    <script src="{{ asset('themplete/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{ asset('themplete/back') }}/dist/js/datatable/datatable-advanced.init.js"></script>



    <script src="{{ asset('themplete/back') }}/dist/libs/select2/dist/js/select2.min.js"></script>
    <script>
        // $(document).ready(function() {
        $('#kategori_berita_id').select2({
            dropdownParent: $('#modal-tambah'),
            theme: "bootstrap",
        })
        // });
    </script>
     <script>
        // $(document).ready(function() {
        $('#kategori_berita_id_edit').select2({
            dropdownParent: $('#modal-edit'),
            theme: "bootstrap",
        })
        // });
    </script>




    <script src="{{ asset('themplete/back') }}/dist/libs/summernote/dist/summernote-lite.min.js"></script>



    {{-- Summernote --}}
    <script>
        $('#isi').summernote({
            height: 200
        });
        $('#isi_edit').summernote({
            height: 200,
            callbacks: {
                onInit: function() {
                    $('#isi_edit').summernote('code', data
                        .isi); // Pastikan 'isi' adalah field yang benar
                }
            }
        });
    </script>
    {{-- Summernote --}}








    {{-- perintah slug tambah data --}}
    <script>
        $(document).ready(function() {
            $('#judul_berita').on('input', function() {
                var slug = $(this).val().toLowerCase().replace(/\s+/g, '-');
                $('#slug').val(slug);
            });
        });
    </script>

    {{-- perintah slug tambah data --}}

    {{-- perintah slug edit data --}}
    <script>
        $(document).ready(function() {
            $('#judul_berita_edit').on('input', function() {
                var slug = $(this).val().toLowerCase().replace(/\s+/g, '-');
                $('#slug_edit').val(slug);
            });
        });
    </script>

    {{-- perintah slug edit data --}}

    {{-- PERINTAH SIMPAN DATA --}}
    <script>
        $(document).ready(function() {
            $('#form-tambah').on('submit', function(event) {
                event.preventDefault();
                const tombolSimpan = $('#btn-save-tambah');

                // Buat objek FormData
                var formData = new FormData(this);

                // Disable tombol simpan untuk menghindari submit ganda
                tombolSimpan.prop('disabled', true).text('Menyimpan...');

                $.ajax({
                    url: '{{ route('berita.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false, // Menghindari jQuery memproses data
                    contentType: false, // Menghindari jQuery mengatur Content-Type
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Menutup modal setelah sukses
                        $('#modal-tambah').modal('hide');

                        // Menampilkan pesan sukses
                        Swal.fire({
                            title: 'Sukses!',
                            text: response.message || 'Data berhasil disimpan.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Reload halaman setelah sukses
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        // Tangani error respon dari controller
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '';

                        if (errors) {
                            // Looping untuk menampilkan semua pesan error
                            $.each(errors, function(field, messages) {
                                errorMessages += messages.join('<br>') + '<br>';
                            });
                        } else {
                            // Jika error umum yang tidak ada di errors
                            errorMessages = xhr.responseJSON.message ||
                                'Terjadi kesalahan, coba lagi.';
                        }

                        // Menampilkan pesan error
                        Swal.fire({
                            title: 'Error!',
                            html: errorMessages,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });

                        console.log(xhr.responseText); // Log untuk debugging
                    },
                    complete: function() {
                        // Re-enable tombol simpan setelah request selesai
                        tombolSimpan.prop('disabled', false).text('Simpan');
                    }
                });
            });
        });
    </script>
    {{-- PERINTAH SIMPAN DATA --}}



    {{-- PERINTAH HAPUS DATA --}}
    <script>
        $(document).ready(function() {
            $('#file_export').on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                var id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah yakin akan menghapus data?',
                    text: "Data tidak bisa dikembalikan jika sudah dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika dikonfirmasi, lakukan permintaan AJAX ke endpoint penghapusan
                        $.ajax({
                            url: '/berita/' + id,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                if (response.hasOwnProperty('message') &&
                                    response.message === 'Data Berhasil Dihapus') {
                                    Swal.fire({
                                        title: 'Sukses!',
                                        text: response.message,
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed || result
                                            .isDismissed) {
                                            location
                                                .reload(); // Merefresh halaman setelah data dihapus
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Gagal!',
                                        text: response.message ||
                                            'Gagal menghapus data',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Terjadi kesalahan saat menghapus data',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                                console.log(xhr
                                    .responseText
                                ); // Tampilkan pesan error jika terjadi
                            }
                        });
                    }
                });
            });
        });
    </script>
    {{-- PERINTAH HAPUS DATA --}}



    {{-- PERINTAH EDIT DATA --}}
    <script>
        $(document).ready(function() {
            $('#file_export').on('click', '.btn-edit', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    method: 'GET',
                    url: '/berita/' + id + '/edit',
                    success: function(data) {

                        // Mengisi data pada form modal
                        $('#id').val(data.id); // Menambahkan nilai id ke input tersembunyi
                        $('#tanggal_posting_edit').val(data.tanggal_posting);
                        $('#judul_berita_edit').val(data.judul_berita);
                        $('#slug_edit').val(data.slug);
                        $('#penulis_edit').val(data.penulis);
                        $('#kategori_berita_id_edit').val(data.kategori_berita_id);
                        $('#ringkasan_edit').val(data.ringkasan);
                        $('#sumber_edit').val(data.sumber);
                        $('#urutan_edit').val(data.urutan);
                        $('#status_edit').val(data.status);
                        $('#isi_edit').summernote('code', data.isi);


                        // Tampilkan modal edit
                        $('#modal-edit').modal('show');


                    },
                    error: function(xhr) {
                        // Tangani kesalahan jika ada
                        alert('Error: ' + xhr.statusText);
                    }
                });
            });


        });
    </script>


    {{-- PERINTAH EDIT DATA --}}


    {{-- PERINTAH UPDATE DATA --}}
    <script>
        $(document).ready(function() {
            $('#btn-save-edit').click(function(e) {
                e.preventDefault();

                const tombolUpdate = $('#btn-save-edit');
                var id = $('#id').val();
                var formData = new FormData($('#form-edit')[0]);

                // Ubah teks tombol menjadi "Updating..." dan disable tombolnya
                tombolUpdate.text('Updating...');
                tombolUpdate.prop('disabled', true);

                $.ajax({
                    type: 'POST', // Gunakan POST karena kita override dengan PUT
                    url: '/berita/' + id,
                    data: formData,
                    headers: {
                        'X-HTTP-Method-Override': 'PUT',
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('form').find('.error-message').remove();
                    },
                    success: function(response) {
                        $('#modal-edit').modal('hide');
                        Swal.fire({
                            title: 'Sukses!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                location.reload();
                            }
                        });
                    },
                    complete: function() {
                        // Kembalikan teks tombol ke "Update" dan enable tombolnya
                        tombolUpdate.text('Update');
                        tombolUpdate.prop('disabled', false);
                    },
                    error: function(xhr) {
                        // Jika bukan error 422 (validasi) tetap sembunyikan modal
                        if (xhr.status !== 422) {
                            $('#modal-edit').modal('hide');
                        }

                        var errorMessages = xhr.responseJSON.errors;
                        var errorMessage = '';

                        if (errorMessages) {
                            // Jika ada pesan error validasi
                            $.each(errorMessages, function(key, value) {
                                errorMessage += value + '<br>';
                            });
                        } else {
                            // Jika error di luar validasi, tampilkan pesan error dari server
                            errorMessage = xhr.responseJSON.message || 'Terjadi kesalahan';
                        }

                        Swal.fire({
                            title: 'Error!',
                            html: errorMessage,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });

                        // Kembalikan tombol ke keadaan semula jika terjadi error
                        tombolUpdate.text('Update');
                        tombolUpdate.prop('disabled', false);
                    }
                });
            });
        });
    </script>


    {{-- PERINTAH UPDATE DATA --}}
@endpush
