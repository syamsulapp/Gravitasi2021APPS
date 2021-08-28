<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;

class DashboardUsersController extends Controller {
    // methodnya

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view('gravitasi.users.dashboard.dashboard');
    }
}
