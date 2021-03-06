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
                    <h1 class="h3 mb-0 text-gray-800">Edit Lomba</h1>
                </div>

                <!-- begin tambha data -->
                <form action="{{ url('/admin/lomba') }}{{ ('/') }}{{ $data['getlomba']->id }}{{ ('/') }}{{ ('update') }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="nama_lomba" class="form-control @error('nama_lomba') is-invalid @enderror" id="inputEmail4" placeholder="Nama" value="{{ $data['getlomba']->nama_lomba }}">
                            @error('nama_lomba')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Deskripsi Lomba</label>
                            <input type="text" name="deskripsi_lomba" class="form-control @error('deskripsi_lomba') is-invalid @enderror" id="inputPassword4" placeholder="deskripsi lomba" value="{{ $data['getlomba']->deskripsi_lomba }}">
                            @error('deskripsi_lomba')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Jenis Lomba</label>
                            <select id="inputState" name="jenis_lomba" class="form-control" required>
                                <option selected disabled value="">Pilih...</option>
                                <option>SMA</option>
                                <option>SMP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Jadwal Lomba</label>
                            <select id="inputState" name="jadwal_lomba" class="form-control" required>
                                <option selected disabled value="">Pilih...</option>
                                @foreach($data['jadwal_lomba'] as $j)
                                <option>{{ $j->tanggal }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Lomba</button>
                    <a href="{{ url('admin/lomba-view') }}" class="btn btn-primary">Kembali</a>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
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