<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadRequirementTypeController extends Controller
{
    public function acadhead_reqtype()
    {
        return view ('frontend.acadhead.acadhead_reqtype');
    }
}
