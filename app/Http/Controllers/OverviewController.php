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
}
