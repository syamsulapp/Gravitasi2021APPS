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
                    <h1 class="h3 mb-0 text-gray-800">Tambah Users</h1>
                </div>

                <!-- begin tambha data -->
                <form action="{{ url('/admin/tambah-users') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputEmail4" placeholder="Nama" value="{{ old('nama') }}">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputPassword4" placeholder="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputAddress" placeholder="masukan password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Konfirmasi Password</label>
                        <input type="password" name="konfir_pass" class="form-control @error('konfir_pass') is-invalid @enderror" id="inputAddress2" placeholder="masukan konfirmasi password">
                        @error('konfir_pass')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" id="inputCity" value="{{ old('nama_sekolah') }}" placeholder="{{ __('nama sekolah') }}">
                            @error('nama_sekolah')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Asal Sekolah</label>
                            <select id="inputState" name="asal_sekolah" class="form-control" required>
                                <option selected disabled value="">Pilih...</option>
                                <option>SMA</option>
                                <option>SMP</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Users</button>
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
