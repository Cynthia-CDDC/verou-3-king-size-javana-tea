<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Collection;
use App\Models\CollectionTeaUser;
use App\Models\User;

class OverviewController extends Controller
{
    public function overviewTeas(Request $request)
    {
        $characteristics = Characteristic::get();
        $test = CollectionTeaUser::get();

        if ($request->characteristic) {
            $id = $request->characteristic;
            $teas = Tea::whereHas('teasCharacteristics', function (Builder $query) use ($id) {
                $query->where('characteristic_id', $id);
            })->get();
        } else {
            $teas = Tea::get();
        }

        // $teas = Tea::get();
        // $user = auth()->user();
        // $userId = $user->id;
        // // dump($teas->first()->teasCollections);
        // dump($teas->first()->teasCollections()->where('user_id', $user->id)->get());
        // $characteristics = Characteristic::get();

        return view('home', compact('teas', 'characteristics'));
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        $collections = Collection::get();
        // dump($collections);
        return view('teadetail', ['tea' => $tea, 'collections' => $collections]);
    }

    public function showMyCollection()
    {
        $collections = Collection::get();
        return view('mycollection', compact('collections'));
    }

    public function saveLike($teaId, $collectionId)
    {
        $user = auth()->user();
        $userId = $user->id;
        $tea = Tea::find($teaId);
        $userTea = CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->get();

        if (CollectionTeaUser::where('user_id', '=', $userId)->where('tea_id', '=', $teaId)->first()) {
            return redirect()->back()->with('error', 'You already added this tea to your collection!');
        } else {
            $user->usersTeas()->attach($teaId, ['collection_id' => $collectionId]);
            return redirect()->back();
        }
    }

    // TODO: Home page: filter on multiple checkbox possibilities
    // TODO: database users table: email_verified and remember_token not used, why? (session, cookies)
}
