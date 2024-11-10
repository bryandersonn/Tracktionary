<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index(): View
    {
        $songs = Song::all();
        $genre = 'Mix';

        return view('index', [
            'songs' => $songs,
            'genre' => $genre
        ]);
    }

    public function genres($genre): View
    {
        $songs = Song::where('genre', 'like', "%, $genre,%")
              ->orWhere('genre', 'like', "$genre,%")
              ->orWhere('genre', 'like', "%, $genre")
              ->orWhere('genre', '=', $genre)
              ->get();

        return view('index', [
            'songs' => $songs,
            'genre' => $genre
        ]);
    }

    public function searches(Request $request): View
    {
        $query = $request->input('query');
        $songs = Song::where('name', 'like', '%'. $query . '%')->get();
        $genre = 'Mix';


        return view('index', [
            'songs' => $songs,
            'genre' => $genre
        ]);
    }
}


