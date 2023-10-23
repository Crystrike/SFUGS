<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TournamentController extends Controller
{
    public function index(){
        $tournaments = Tournament::all();
        return view('Tournaments.index', ['tournaments'=>$tournaments]);
    }


    public function create(){
        $games = Game::all();
        return view('Tournaments.create', ['games' => $games]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Tournament::create($data);
        return redirect()->route('tournaments.index');
    }
}
