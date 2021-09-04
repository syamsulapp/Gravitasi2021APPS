<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ModelsAdmin\AdminModels;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = array(
            'countUsers' => DB::table('users')->count(),
            'countLomba' => DB::table('tbl_lomba')->count(),
            'countJadwal' => DB::table('tbl_jadwal_lomba')->count(),
        );
        return view('gravitasi.admin.dashboard.admindashboard', compact('data'));
    }
}
