<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadClassObservationController extends Controller
{
    public function acadhead_classobserve()
    {
        return view ('frontend.acadhead.acadhead_classobserve');
    }
}
