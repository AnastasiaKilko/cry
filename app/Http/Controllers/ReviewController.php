<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Publication;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function index($id) {
        $authorship = Authorship::with(['book:id'])
        ->where('id_books', $id)
        ->first();

        return view('review', compact('authorship'));
    }

    public function create(Request $request, $id)
    {
        Review::create([
            'id_books' => $id,
            'id_user' => Auth::user()->id,
            'rating' => $request->input('rating'),
            'text' => $request->input('text'),
            'date' => Carbon::today()->format('d.m.Y'),
        ]);

        return redirect()->route('bookPage', compact('id'));
    }
}
