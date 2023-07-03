<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewUserController extends Controller
{
    public function acadhead_newuser()
    {
        return view ('frontend.admin.acadhead_newuser');
    }
}
