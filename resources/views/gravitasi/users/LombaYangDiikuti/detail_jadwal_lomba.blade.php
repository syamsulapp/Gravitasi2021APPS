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
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <!-- Default Card Example -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Data Lengkap Lomba
                            </div>
                            <div class="card-body">
                                <p>1. {{ $detail->nama_lomba }}</p>
                                <p>2. {{ $detail->tanggal }}</p>
                                <p>3. {{ $detail->waktu }}</p>
                                <p>4. {{ $detail->deskripsi_jadwal_lomba }}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
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