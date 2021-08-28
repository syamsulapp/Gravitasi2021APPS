<?php
namespace App\Http\Controllers\Admin\Keuangan;

use App\Http\Controllers\Controller;

class DaftarPesertaSdhBayarController extends Controller {
    // methodnya /functionnya disini

    public function __construct()
    {
        $this->middleware('auth');
    }
}
