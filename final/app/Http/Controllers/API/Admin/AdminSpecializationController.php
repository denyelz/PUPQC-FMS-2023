<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSpecializationController extends Controller
{
    public function acadhead_specialization()
    {
        return view ('frontend.admin.acadhead_specialization');
    }
}
