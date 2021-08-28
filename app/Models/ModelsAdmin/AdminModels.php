<?php

namespace App\Models\ModelsAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModels extends Model
{
    // query data users
    protected $table = 'users';

    protected $fillable = ['name','noreg','email','password','namasekolah','asalsekolah'];

}
