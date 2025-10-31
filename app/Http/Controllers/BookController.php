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

class BookController extends Controller
{

    public function index() {
        $age = AgeLimit::all();
        $type = BooksType::all();

        return view('createBook', compact('age', 'type'));
    }

    public function create(Request $request) {

        $book = Book::create([
            'name' =>  $request->input('name'),
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
        ]);

        $book->save();

//        $author = Author::create([
//            'surname' =>  $request->input('surname'),
//            'name' => $request->input('name'),
//            'patronymic' => $request->input('patronymic'),
//        ]);
//
//        $publisher = Publisher::create([
//            'name' =>  $request->input('name'),
//        ]);
//
//        $authorship = Authorship::create([
//            'book_id' => $book->id,
//            'author_id' => $author->id,
//        ]);
//
//        $publication = Publication::create([
//            'book_id' => $book->id,
//            'publisher_id' => $publisher->id,
//            'release_year' => $request->input('release_year'),
//        ]);


    }
}
