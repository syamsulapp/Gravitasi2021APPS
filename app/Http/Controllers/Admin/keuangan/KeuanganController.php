<?php
namespace App\Http\Controllers\Admin\Keuangan;

use App\Http\Controllers\Controller;

class KeuanganController extends Controller {
    // function / methodnya
    public function __construct()
    {
        $this->middleware('auth');
    }
}