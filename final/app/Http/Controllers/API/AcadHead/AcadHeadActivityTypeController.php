<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadActivityTypeController extends Controller
{
    public function acadhead_acttype()
    {
        return view ('frontend.acadhead.acadhead_acttype');
    }
}
