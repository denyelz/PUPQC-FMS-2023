<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSystemRoleController extends Controller
{
    public function acadhead_systemrole()
    {
        return view ('frontend.admin.acadhead_systemrole');
    }
}
