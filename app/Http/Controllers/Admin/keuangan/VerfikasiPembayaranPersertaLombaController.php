<?php
namespace App\Http\Controllers\Admin\Keuangan;

use App\Http\Controllers\Controller;

class VerfikasiPembayaranPersertaLombaController extends Controller {
    // methodnya (functionya disini)
    public function __construct()
    {
        $this->middleware('auth');
    }
}
