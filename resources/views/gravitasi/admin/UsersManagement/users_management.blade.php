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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Users Management') }}</h1>
                </div>
                {{-- @if($pesan = Session::get('sukses'))--}}
                {{-- <div class="alert alert-success" role="alert">--}}
                {{-- {{ $pesan }}--}}
                {{-- </div>--}}
                {{-- @endif--}}
                <div class="flash-data" data-flashdata="@if($pesan = Session::get('sukses')){{ $pesan }}@endif"></div>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('Daftar Akun Admin') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Noreg</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Noreg</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            @foreach($users_management as $u)
                                            @if($u->role != 'users')
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>{{ $u->noreg }}</td>
                                            <td><a href="{{ ('users-view/') }}{{ $u->id }}{{ ('/') }}{{ ('edit') }}" class="btn btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Edit Users</span>
                                                </a></td>
                                            <td>
                                                <form action="{{ url('admin/users-management') }}{{ ('/') }}{{ $u->id }}{{ ('/') }}{{ ('delete') }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus Users</span>
                                                    </button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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