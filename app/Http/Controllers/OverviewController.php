<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;

class OverviewController extends Controller
{
    public function overviewTeas()
    {
        $teas = Tea::all();
        // dd($tea);
        return view('home', ['teas' => $teas]);
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        // dd($tea);
        return view('teadetail', ['tea' => $tea]);
    }
}
