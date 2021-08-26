@extends('gravitasi.app')

@section('judul','Register gravitasi')

@section('konten')
    <body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-registernone d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Akun Lomba!</h1>
                            </div>
                            <form class="user" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"  name="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName"
                                               placeholder="Nama Pendamping">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror " id="exampleLastName"
                                               placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="namasekolah" class="form-control form-control-user  @error('namasekolah') is-invalid  @enderror " id="namasekolah"
                                               placeholder="Nama Sekolah">
                                        @error('namasekolah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="asalsekolah" class="form-control form-control-user @error('asalsekolah') is-invalid @enderror"  id="asalsekolah"
                                               placeholder="asal sekolah">
                                        @error('asalsekolah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                               id="exampleInputPassword" placeholder="masukan password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_conf" class="form-control form-control-user @error('password_conf') is-invalid @enderror"
                                               id="exampleRepeatPassword" placeholder="ketik ulang passwordnya">
                                        @error('password_conf')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Sdh daftar ? login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>


@endsection
