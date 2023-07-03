<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadClassScheduleController extends Controller
{
    public function acadhead_classsched()
    {
        return view ('frontend.acadhead.acadhead_classsched');
    }
}
