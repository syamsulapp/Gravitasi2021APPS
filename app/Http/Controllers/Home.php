<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    /** method dibawah untuk menu dari halaman depan */
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return 'tampilan about';
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
