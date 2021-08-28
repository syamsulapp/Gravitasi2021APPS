<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CreateJadwalLOmbaController extends Controller {
    // methodnya(functionnya disini)
    public function __construct()
    {
        $this->middleware('auth');
    }

}
