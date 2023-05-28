<?php

namespace App\Http\Controllers\API\AcadHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadHeadProfileController extends Controller
{
    public function acadhead_profile()
    {
        return view ('frontend.acadhead.acadhead_profile');
    }
}
