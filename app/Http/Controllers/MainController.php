<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public function dayBook()
    {
        $id = Cache::remember('daily_book_of_the_day', now()->endOfDay(), function() {
            return Book::all()->pluck('id')->random();
        });

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
            ->firstOrFail();

        $sale = $book->book->price * 0.85;

        return view('welcome', compact('authorship', 'sale'));
    }

    public function searchBooks(Request $request)
    {
        $request->validate([
            'search' => 'required|string|min:2|max:100'
        ]);

        $search = $request->input('search');

        $authorship = Authorship::with(['book', 'author'])
            ->when($search, function($query) use ($search) {
                return $query->whereHas('book', function($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%');
                });
            })
            ->get();

        return view('search', compact('authorship', 'search'));

    }
}
