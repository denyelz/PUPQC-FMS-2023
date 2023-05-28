<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminFacultyTypeController extends Controller
{
    public function acadhead_facultytype()
    {
        return view ('frontend.admin.acadhead_facultytpe');
    }
}
