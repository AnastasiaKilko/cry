<?php

namespace App\Http\Controllers;

use App\Models\ShoppingBag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingBagController extends Controller
{
    public function addToCart($id)
    {
        if(!Auth::user()){
            return redirect()->route('login');
        } else{
            $userCart = ShoppingBag::where('id_users', Auth::user()->id)->get();

            if ($userCart->isEmpty()) {
                ShoppingBag::create([
                    'id_users' => Auth::user()->id,
                    'id_authorship' => $id,
                ]);
            } else {
                $shoppingBag = $userCart->where('id_authorship', $id)->first();
                if ($shoppingBag) {
                    $shoppingBag->delete();
                } else {
                    ShoppingBag::create([
                        'id_users' => Auth::user()->id,
                        'id_authorship' => $id,
                    ]);
                }
            }
            return redirect()->back();
        }
    }
    public function cart()
    {
        $shoppingBags = ShoppingBag::with([
            'authorship.author:id,name,surname',
            'authorship.book:id,title,id_book_types,price',
            'authorship.book.booksType:id,type_img'
        ])
            ->where('id_users', Auth::user()->id)
            ->get();

        return view('/shoppingBag', compact('shoppingBags'));
    }
}
