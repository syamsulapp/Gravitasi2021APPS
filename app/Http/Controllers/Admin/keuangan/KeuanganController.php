<?php

namespace App\Http\Controllers\Admin\Keuangan;

use App\Http\Controllers\Controller;

class KeuanganController extends Controller
{
    // function / methodnya
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('gravitasi.adminKeuangan.dashboard.dashboardKeuangan');
    }

    public function konfirmasi_pembayaran()
    {
        return 'halaman konfirmasi pemnbayaram';
    }

    public function sudah_membayar()
    {
        return 'halaman sdh membayar';
    }
}
