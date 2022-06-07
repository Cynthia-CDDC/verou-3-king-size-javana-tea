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
        // dump($collections);
        return view('teadetail', ['tea' => $tea, 'collections' => $collections]);
    }

    public function showMyCollection()
    {
        return view('mycollection');
    }

    public function saveLike($teaId, $collectionId)
    {
        $user = auth()->user();
        $userId = $user->id;
        $tea = Tea::find($teaId);

        
        // dump($user, $userId, $tea, $teaId, $collectionId);
        
        // $test = CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->get();
        // dump($test);
        
        if(CollectionTeaUser::where('user_id','=',$userId)->where('tea_id','=',$teaId)->first())
        {
            echo 'your already added';
            
        } else {
            $user->usersTeas()->attach($teaId, ['collection_id' => $collectionId]);
            dump($user);
        }

        // return redirect()->route('home');
    }
}
// TODO: Teadetail page: if userId and teaId combo exists: update, else: attach
// TODO: My Collection page: show per type the teas of user with type buttons to change status
// TODO: Home page: filter on multiple checkbox possibilities
// TODO: database users table: email_verified and remember_token not used, why? (session, cookies)