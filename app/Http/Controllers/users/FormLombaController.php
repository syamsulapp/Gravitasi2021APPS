<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;

class FormLombaController extends Controller {
    // methodnya

    public function __construct()
    {
        $this->middleware('auth');
    }
}
