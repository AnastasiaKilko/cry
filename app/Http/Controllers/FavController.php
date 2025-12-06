<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavController extends Controller
{
    public function add_to_favourites($id)
    {
        $userFav = User_shopping_cart::where('id_user', Auth::user()->id)->get();

        if ($userFav->isEmpty()) {
            User_shopping_cart::create([
                'id_user' => Auth::user()->id,
                'id_product' => $id,
                'quantity_product' => 1,
                'amount_to_pay' => Product::where('id', $id)->firstorfail()->price,
            ]);
        } else {
            $favourite = $userFav->where('id_product', $id)->first();
            if ($favourite) {
                $favourite->delete();
            } else {
                User_shopping_cart::create([
                    'id_user' => Auth::user()->id,
                    'id_product' => $id,
                    'quantity_product' => 1,
                    'amount_to_pay' => Product::where('id', $id)->firstorfail()->price,
                ]);
            }
        }

        return redirect()->back();
    }

}
