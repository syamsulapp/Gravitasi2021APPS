<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;

class PengumumanController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
}
