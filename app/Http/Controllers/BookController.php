<?php

namespace App\Http\Controllers;

use App\Models\AgeLimit;
use App\Models\Author;
use App\Models\Authorship;
use App\Models\Book;
use App\Models\BooksType;
use App\Models\Publication;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function index() {
        $age = AgeLimit::all();
        $type = BooksType::all();

        return view('createBook', compact('age', 'type'));
    }

    public function create(Request $request) {

        $path = $request->file('cover_image')->store('cover_images', 'public');
        $url = Storage::url($path);

        $book = Book::create([
            'cover_image' => $url,
            'title' =>  $request->input('title'),
            'ISBN' => $request->input('ISBN'),
            'id_age_limit' => $request->input('id_age_limit'),
            'id_book_types' => $request->input('id_book_types'),
            'pages' => $request->input('pages'),
            'size' => $request->input('size'),
            'book_cover' => $request->input('book_cover'),
            'copies' => $request->input('copies'),
            'weight' => $request->input('weight'),
            'filesize' => $request->input('filesize'),
            'file_format' => $request->input('file_format'),
            'price' => $request->input('price'),
            'e_book_link' => $request->input('e_book_link'),
            'summary' => $request->input('summary'),
        ]);

        $author = Author::where('surname', $request->input('surname'))
            ->where('name', $request->input('name'))
            ->where('patronymic', $request->input('patronymic'))
            ->first();

        if (!$author) {
            $author = Author::create([
                'surname' => $request->input('surname'),
                'name' => $request->input('name'),
                'patronymic' => $request->input('patronymic'),
            ]);
        }

        Authorship::create([
            'id_books' => $book->id,
            'id_authors' => $author->id,
        ]);

        $publisher = Publisher::where('publisher_name', $request->input('publisher_name'))
            ->first();

        if (!$publisher) {
            $publisher = Publisher::create([
                'publisher_name' =>  $request->input('publisher_name'),
            ]);
        }

        Publication::create([
            'id_books' => $book->id,
            'id_publishers' => $publisher->id,
            'release_year' => $request->input('release_year'),
        ]);

        return redirect()->route('bookPage', ['id' => $book->id]);
    }

    public function catalog() {
        $authorship = Authorship::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'price')
            ->where('id_book_types', 2);
        }, 'author' => function($q) {
            $q->select('id', 'surname', 'name');
        }])
            ->whereHas('book', function($query) {
                $query->where('id_book_types', 2);
            })
            ->get();

        return view('catalogue', compact('authorship'));
    }

    public function eCatalog() {
        $authorship = Authorship::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'price')
                ->where('id_book_types', 3);
        }, 'author' => function($q) {
            $q->select('id', 'surname', 'name');
        }])
            ->whereHas('book', function($query) {
                $query->where('id_book_types', 3);
            })
            ->get();

        return view('eCatalogue', compact('authorship'));
    }

    public function bookPage($id)
    {
        $authorship = Authorship::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'ISBN', 'id_age_limit', 'id_book_types', 'pages', 'size',
                'book_cover','copies', 'weight', 'filesize', 'file_format', 'price', 'summary')
                ->with(['ageLimit', 'booksType']);
        }, 'author' => function($q) {
            $q->select('id', 'surname', 'name', 'patronymic');
        }])
            ->where('id_books', $id)
            ->get();

        $publication = Publication::with(['book' => function($q) {
            $q->select('id', 'cover_image', 'title', 'ISBN', 'id_age_limit', 'id_book_types', 'pages', 'size',
                'book_cover','copies', 'weight', 'filesize', 'file_format', 'price', 'summary')
                ->with(['ageLimit', 'booksType']);
        }, 'publisher' => function($q) {
            $q->select('id', 'publisher_name');
        }])
            ->where('id_books', $id)
            ->get();

        return view('/bookPage', compact('authorship', 'publication'));
    }

    public function bookType(Request $request)
    {
        $path = $request->file('type_img')->store('icons', 'public');
        $url = Storage::url($path);

        BooksType::create([
            'type' => $request->input('type'),
            'type_img' => $url,
        ]);
    }
}
