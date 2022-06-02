<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;

class OverviewController extends Controller
{
    public function overviewTeas(Request $request)
    {
        // dd($_GET);
        // is there characteristic -> filter, otherwise not
        if ($request->characteristic) {
            $id = $request->characteristic;
            $teas = Characteristic::find($id);
        } else {
            $teas = Tea::get();
        }

        $characteristics = Characteristic::get();
        // $test = $request->characteristic;
        // dd($test);
        return view('home', compact('teas', 'characteristics'));
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);

        return view('teadetail', ['tea' => $tea]);
    }
}
