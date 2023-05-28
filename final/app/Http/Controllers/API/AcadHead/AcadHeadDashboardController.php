<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadDashboardController extends Controller
{
    public function acadhead_dashboard()
    {
        return view ('frontend.acadhead.acadhead_dashboard');
    }
}
