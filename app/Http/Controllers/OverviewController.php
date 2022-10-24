<?php
/*
        echo '<pre>';
        dump();
        echo '</pre>';
*/
namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Collection;
use App\Models\CollectionTeaUser;

class OverviewController extends Controller
{
    public function overviewTeas(Request $request)
    { /* TODO: avoid duplicates in $teasWithChar = []; 
               highlight selection in characteristics line */
        if (auth()->check()) {
            $user = auth()->user();
            $userId = $user->id;

            if ($request->characteristic) {
                $charId = $request->characteristic;
                $selectedValues = [];
                $teasWithChar = [];
                
                foreach ($charId as $k => $v) {
                    $value = intval($v);
                    /* adds value to array */
                    $selectedValues[] = $value;
                    
                    $teas = Tea::whereHas('teasCharacteristics', function ($query) use ($value) {
                        $query->where('characteristic_id', $value);
                        })->get();
                    $teasWithChar[] = $teas;
                }
            }
            else {
                $teasWithChar = [];
                $teas = Tea::get();
                $teasWithChar[]= $teas;
                $selectedValues = 0;
            }

            $characteristics = Characteristic::get();
            return view('home', compact('userId', 'teas', 'characteristics', 'teasWithChar', 'selectedValues'));
        } 
        else {
            if ($request->characteristic) {
                $charId = $request->characteristic;
                $selectedValues = [];
                $teasWithChar = [];
                
                foreach ($charId as $k => $v) {
                    $value = intval($v);
                    /* adds value to array */
                    $selectedValues[] = $value;
                    
                    $teas = Tea::whereHas('teasCharacteristics', function ($query) use ($value) {
                        $query->where('characteristic_id', $value);
                        })->get();
                    $teasWithChar[] = $teas;
                }
            }
            else {
                $teasWithChar = [];
                $teas = Tea::get();
                $teasWithChar[]= $teas;
                $selectedValues = 0;
            }
            $characteristics = Characteristic::get();
            return view('home', compact('teas', 'characteristics', 'teasWithChar', 'selectedValues'));
        }
        return view('home', compact('teas', 'characteristics', 'selectedValues'));
    }

    public function detailsTea($id)
    {
        $tea = Tea::find($id);
        $collections = Collection::get();
        return view('teadetail', compact('tea', 'collections') );
    }/* non compact version of return:
    return view('teadetail',['tea' => $tea, 'collections' => $collections]) */

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

    public function saveCollectionType($teaId, $collectionId)
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

    public function deleteFromCollection($teaId)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $userId = $user->id;
            $userTea = CollectionTeaUser::where(['user_id' => $user->id, 'tea_id' => $teaId])->get();

            if ($userTea->isNotEmpty()) {
                CollectionTeaUser::where(['user_id' => $userId, 'tea_id' => $teaId])->delete();
                return redirect()->back()->with('success', 'You successfully deleted the tea from your collection!');
            }
        }
    }
}
