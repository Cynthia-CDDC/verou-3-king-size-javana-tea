<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;

class OverviewController extends Controller
{
    public function overviewTeas()
    {
        $healtyTeas = Tea::where('id', 4)->first();
        // dd($healtyTeas);
        
        dd($healtyTeas->teasCharacteristics);
        
        return view('home', ['' => $]);
        
        // foreach ($healtyTeas as $h) {
        //     $chars = $h->teasCharacteristics;
        //     dd($chars);
        //     }
        

        // $teas = Tea::all();
        // dd($tea);
        // return view('home', ['teas' => $teas]);
        
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        // dd($tea);
        return view('teadetail', ['tea' => $tea]);
    }
}
