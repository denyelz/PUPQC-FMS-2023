<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProgramsController extends Controller
{
    public function acadhead_programs()
    {
        return view ('frontend.admin.acadhead_programs');
    }
}
