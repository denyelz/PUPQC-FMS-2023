<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDesignationController extends Controller
{
    public function acadhead_destination()
    {
        return view ('frontend.admin.acadhead_destination');
    }
}
