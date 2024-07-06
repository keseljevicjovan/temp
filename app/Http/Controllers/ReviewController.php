<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Movie $movie)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $movie->reviews()->create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('movie', $movie->id)->with('success', 'Review added successfully');
    }
}
