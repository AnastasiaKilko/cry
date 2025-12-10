<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Book;
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
            $authorship = Authorship::with(['book:id,price'])
            ->where('id', $id)
                ->firstOrFail();

            if ($userCart->isEmpty()) {
                ShoppingBag::create([
                    'id_users' => Auth::user()->id,
                    'id_authorship' => $id,
                    'amount' => 1,
                    'amount_price' => $authorship->book->price,
                ]);
            } else {
                $shoppingBag = $userCart->where('id_authorship', $id)->first();
                if ($shoppingBag) {
                    $shoppingBag->amount += 1;
                    $shoppingBag->amount_price += $shoppingBag->authorship->book->price;
                    $shoppingBag->save();
                } else {
                    ShoppingBag::create([
                        'id_users' => Auth::user()->id,
                        'id_authorship' => $id,
                        'amount' => 1,
                        'amount_price' => $authorship->book->price
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

        $cost = ShoppingBag::where('id_users', Auth::user()->id)->get()->sum('amount_price');

        return view('/shoppingBag', compact('shoppingBags', 'cost'));
    }

    public function plus($id) {
        $userCart = ShoppingBag::where('id', $id)->firstOrFail();
        $userCart->amount += 1;
        $userCart->amount_price += $userCart->authorship->book->price;
        $userCart->save();
        return redirect()->back();
    }
    public function minus($id) {
        $userCart = ShoppingBag::where('id', $id)->firstOrFail();
        $userCart->amount -= 1;
        $userCart->amount_price -= $userCart->authorship->book->price;
        $userCart->save();

        if($userCart->amount === 0){
            $userCart->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}