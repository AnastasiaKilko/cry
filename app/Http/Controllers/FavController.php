<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Authorship;
use App\Models\Favourites;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavController extends Controller
{
    public function addToFavs($id)
    {
        $userFav = Favourites::where('id_users', Auth::user()->id)->get();

        if ($userFav->isEmpty()) {
            Favourites::create([
                'id_users' => Auth::user()->id,
                'id_authorship' => $id,
            ]);
        } else {
            $favourite = $userFav->where('id_authorship', $id)->first();
            if ($favourite) {
                $favourite->delete();
            } else {
                Favourites::create([
                    'id_users' => Auth::user()->id,
                    'id_authorship' => $id,
                ]);
            }
        }
        return redirect()->back();
    }
    public function fav()
    {
        $favourites = Favourites::with([
            'authorship.author:id,name,surname',
            'authorship.book:id,title,id_book_types,price',
            'authorship.book.booksType:id,type_img'
        ])
            ->where('id_users', Auth::user()->id)
            ->get();

        return view('/favourites', compact('favourites'));
    }
}
