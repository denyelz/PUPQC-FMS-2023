<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function acadhead_role()
    {
        return view ('frontend.admin.acadhead_role');
    }
}
