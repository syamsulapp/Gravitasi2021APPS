<?php

namespace App\Models\ModelsAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsJadwal extends Model
{
    protected $table = 'tbl_jadwal_lomba';
    protected $fillable = ['nama_lomba','jadwal_lomba','tanggal','waktu','deskripsi_jadwal_lomba'];
    use HasFactory;
}
