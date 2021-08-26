<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UsersManagementController extends Controller {
    // method (functionnya)
    public function __construct()
    {
        $this->middleware('auth');
    }

}
