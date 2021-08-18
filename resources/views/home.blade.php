@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard gravitasi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}These credentials do not match our records.

                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="btn btn-primary" {{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                        Keluar
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
