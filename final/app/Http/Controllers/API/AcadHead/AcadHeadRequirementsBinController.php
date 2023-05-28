<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadRequirementsBinController extends Controller
{
    public function acadhead_reqbin()
    {
        return view ('frontend.acadhead.acadhead_reqbin');
    }
}
