@extends('gravitasi.app')

@section('judul','halaman dashboard')

@section('konten')
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- menunya -->
    @include('gravitasi.menu.menu')
    <!-- // menunya -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- header -->
        @include('gravitasi.layouts.header')
        <!-- end header -->

            <!-- Begin Page Content -->
            <!-- konten begin -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal Lomba</h1>
                </div>

                <!-- begin tambha data -->
                <form action="{{ url('/admin/jadwal') }}{{ ('/') }}{{ $editjadwal->id }}{{ ('/') }}{{ ('update') }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">{{ __('Nama Lomba') }}</label>
                            <input type="text" name="nama_lomba" class="form-control @error('nama_lomba') is-invalid @enderror" id="inputEmail4" placeholder="Nama" value="{{ $editjadwal->nama_lomba }}">
                            @error('nama_lomba')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">{{ __('Jadwal Lomba') }}</label>
                            <input type="text" name="jadwal_lomba" class="form-control @error('jadwal_lomba') is-invalid @enderror" id="inputEmail4" placeholder="Format : senin, DD-MM-YY" value="{{ $editjadwal->tanggal }}">
                            @error('jadwal_lomba')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">{{ __('Waktu') }}</label>
                            <input type="text" name="waktu" class="form-control @error('waktu') is-invalid @enderror" id="inputPassword4" placeholder=" H:m:s : 09:30" value="{{ $editjadwal->waktu }}">
                            @error('waktu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">{{ __('Deskripsi Lomba') }}</label>
                            <input type="text" name="deskripsi_lomba" class="form-control @error('deskripsi_lomba') is-invalid @enderror" id="inputPassword4" placeholder="deskripsi lomba" value="{{ $editjadwal->deskripsi_jadwal_lomba }}">
                            @error('deskripsi_lomba')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Edit Jadwal Lomba') }}</button>
                    <a href="{{ url('admin/jadwal-lomba-view') }}" class="btn btn-primary">Kembali</a>
                </form>
                <!-- //end tambha data -->
            </div>
            <!-- End of Main Content -->
            @include('gravitasi.layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection
