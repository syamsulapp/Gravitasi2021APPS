<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;

class PendaftaranLombaController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
}
