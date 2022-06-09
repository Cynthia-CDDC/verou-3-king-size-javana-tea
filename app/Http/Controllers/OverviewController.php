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
            $characteristic = $request->characteristic;
            $teas = Tea::whereHas('teasCharacteristics', function (Builder $query) use ($characteristic) {
                $query->where('characteristic_id', $characteristic);
            })
                ->with(['teasCollections' => function ($query) {
                    if (auth()->check()) {
                        $query->where('user_id', auth()->user()->id);
                    }
                }])
                ->get();
        } else {
            $teas = Tea::with(['teasCollections' => function ($query) {
                if (auth()->check()) {
                    $query->where('user_id', auth()->user()->id);
                }
            }])->get();

            $characteristics = Characteristic::get();

            return view('home', compact('teas', 'characteristics'));
        }
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        $collections = Collection::get();
        return view('teadetail', ['tea' => $tea, 'collections' => $collections]);
    }

    public function showMyCollection()
    {   
        $user = auth()->user();
        $userId = $user->id;
        $collections = Collection::get();
        // $test = Collection::where(['user_id' => $userId])->get();
        // dump($test);

        $teas = Tea::with(['teasCollections' => function ($query) {
                $query->where('user_id', auth()->user()->id);
        }])->get();
        dump($teas);
        

        
// switch ($test) {
// 	case 'favourites':
//         echo "Age is 18";
//         break;
//     case 'like':
//         echo "Age is 20";
//         break;
//     case 'dislike':
//         echo "Age is 21";
//         break;
//     case 'want to try':
//         echo "Age is 22";
//         break;
// }

        return view('mycollection', compact('collections', 'teas'));
    }

    public function saveLike($teaId, $collectionId)
    {
        $user = auth()->user();
        $userId = $user->id;
        $tea = Tea::find($teaId);
        $userTea = CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->get();

        if ($userTea->isNotEmpty()) {
            CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->update(['collection_id' => $collectionId]);
            return redirect()->back()->with('success', 'You successfully changed the collection type');
        } else {
            $user->usersTeas()->attach($teaId, ['collection_id' => $collectionId]);
            return redirect()->back()->with('success', 'You successfully added this tea to your collection');
        }
    }
}
// TODO: My Collection page: show per type the teas of user with type buttons to change status
// TODO: Create delete for teas in Mycollection page
// TODO: Home page: filter on multiple checkbox possibilities, use [] ?
// TODO: database users table: email_verified and remember_token not used, why? (session, cookies)
