<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAcademicRankController extends Controller
{
    public function acadhead_acadrank()
    {
        return view ('frontend.admin.acadhead_acadrank');
    }
}
