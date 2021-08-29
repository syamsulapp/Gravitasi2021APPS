<?php

namespace App\Models\ModelsAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsLomba extends Model
{
    protected $table = 'tbl_lomba';
    protected $fillable = ['nama_lomba','deskripsi_lomba'];
    use HasFactory;
}
