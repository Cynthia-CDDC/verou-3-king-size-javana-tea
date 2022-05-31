<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;

class OverviewController extends Controller
{
    public function overviewTeas()
    {
        $teas = Tea::get();
        
        return view('home', ['teas' => $teas]);
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);

        return view('teadetail', ['tea' => $tea]);
    }
}
