<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Book;
use App\Models\Publication;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dayBook()
    {
        $books = Book::all()->select('id')->pluck('id');
        $id = $books->random();

        $authorship = Authorship::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'id_book_types', 'price', 'summary')
                ->with(['booksType']);
        }, 'author' => function($q) {
            $q->select('id', 'surname', 'name');
        }])
            ->where('id_books', $id)
            ->get();

        $book = Authorship::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'id_book_types', 'price', 'summary')
                ->with(['booksType']);
        }, 'author' => function($q) {
            $q->select('id', 'surname', 'name');
        }])
            ->where('id_books', $id)
            ->first();

        $sale = $book->book->price * 0.85;

        return view('/welcome', compact('authorship', 'sale'));
    }
}
