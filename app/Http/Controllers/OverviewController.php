<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
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
            $teas = Tea::whereHas('teasCharacteristics', function (Builder $query) use ($id) {
                $query->where('characteristic_id', $id);
            })->get();
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

    public function showMyCollection()
    {
        return view('mycollection');
    }

    public function saveLike($teaId)
    {
        $user = auth()->user();
        $tea = Tea::find($teaId);
        dump($user, $tea);

        // TODO: add save here to save to database (teaUser)

        return redirect()->back();
    }
}
