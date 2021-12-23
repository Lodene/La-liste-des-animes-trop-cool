<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\Studio;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(){
        return view('anime.anime_list', [
            'animes' => Anime::all(),
            'genres' => Genre::all()
        ]);
    }
}
