<?php

namespace App\Http\Controllers\users;

use App\Models\ModelsUsers\ModelsUsers;
use App\Http\Controllers\Controller;
use App\Models\ModelsAdmin\ModelsJadwal;

class DashboardUsersController extends Controller
{
    // methodnya

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ModelsUsers $lomba)
    {
        $lomba = $lomba->all();
        return view('gravitasi.users.dashboard.dashboard', compact('lomba'));
    }

    public function jadwal_lomba(ModelsJadwal $jadwal)
    {
        $jadwal = $jadwal->all();
        return view('gravitasi.users.LombaYangDiikuti.jadwal_lomba', compact('jadwal'));
    }

    public function detail_jadwal(ModelsJadwal $detail)
    {
        return view('gravitasi.users.LombaYangDiikuti.detail_jadwal_lomba', compact('detail'));
    }
}
