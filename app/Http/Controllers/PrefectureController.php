<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;

class PrefectureController extends Controller
{
    public function index(Prefecture $prefecture)
        {
            return view('prefectures.index')->with(['teams' => $prefecture->getByPrefecture()]);  
        }
}
