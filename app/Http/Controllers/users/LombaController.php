<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;

class LombaController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
}
