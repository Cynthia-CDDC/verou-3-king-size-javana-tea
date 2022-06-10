<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Collection;
use App\Models\CollectionTeaUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OverviewController extends Controller
{
    public function overviewTeas(Request $request)
    {
        if ($request->characteristic) {
            $id = $request->characteristic;

            $teas = Tea::whereHas('teasCharacteristics', function (Builder $query) use ($id) {
                $query->where('characteristic_id', $id);
            })->get();
        } else {
            $teas = Tea::get();
        }
        $characteristics = Characteristic::get();

        return view('home', compact('teas', 'characteristics'));
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        $collections = Collection::get();
        return view('teadetail', ['tea' => $tea, 'collections' => $collections]);
    }

    public function showMyCollection()
    {
        $collections = Collection::get();


        $favourites = Tea::whereHas('teasCollections', function ($query) {
            if (auth()->check()) {
                $query->where('user_id', auth()->user()->id)->where('collection_id', 1);
            }
        })->get();

        $like = Tea::whereHas('teasCollections', function ($query) {
            if (auth()->check()) {
                $query->where('user_id', auth()->user()->id)->where('collection_id', 2);
            }
        })->get();

        $dislike = Tea::whereHas('teasCollections', function ($query) {
            if (auth()->check()) {
                $query->where('user_id', auth()->user()->id)->where('collection_id', 3);
            }
        })->get();

        $wantToTry = Tea::whereHas('teasCollections', function ($query) {
            if (auth()->check()) {
                $query->where('user_id', auth()->user()->id)->where('collection_id', 4);
            }
        })->get();

        return view('mycollection', compact('collections', 'favourites', 'like', 'dislike', 'wantToTry'));
    }

    public function saveLike($teaId, $collectionId)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $userId = $user->id;
            $userTea = CollectionTeaUser::where(['user_id' => $user->id, 'tea_id' => $teaId])->get();

            if ($userTea->isNotEmpty()) {
                CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->update(['collection_id' => $collectionId]);
                return redirect()->back()->with('success', 'You successfully changed the collection type!');
            } else {
                $user->usersTeas()->attach($teaId, ['collection_id' => $collectionId]);
                return redirect()->back()->with('success', 'You successfully added this tea to your collection!');
            }
        } else {
            return redirect()->back()->with('error', 'Please log in or register to add to collection!');
        }
    }
}
// TODO: Create delete for teas in Mycollection page
// TODO: Home page: filter on multiple checkbox possibilities, use [] ?
// TODO: database users table: email_verified and remember_token not used, why? (session, cookies)
