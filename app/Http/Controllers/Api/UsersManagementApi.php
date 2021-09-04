<?php
namespace App\Http\Controllers\Api;
use App\Models\ModelsApi;
use App\Http\Controllers\Controller;

class UsersManagementApi extends Controller{

    // method get data
    public function getAll(ModelsApi $getUsersApi) {
        return $getUsersApi->all();
    }
}
