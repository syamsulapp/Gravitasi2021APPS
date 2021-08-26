<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('gravitasi.users.dashboard.dashboard');
    }
    /** method dibawah untuk menu dari halaman depan */
    public function home()
    {
    }

    public function about()
    {
    }

    public function kontak()
    {
    }

    public function login()
    {
    }

    public function register()
    {
    }
}
