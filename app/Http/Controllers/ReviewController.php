<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $book = Book::all();
        $user = User::all();

        return view('reviewModalPage', compact('book', 'user'));
    }
    public function create(Request $request)
    {
        $review = Review::create([
            'id_books' => $request->input('id_books'),
            'id_user' => $request->input('id_user'),
            'rating' => $request->input('rating'),
            'text' => $request->input('text'),

        ]);
    }

}
