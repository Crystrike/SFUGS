<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Participation;
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
        $filename = $data['logo']->getClientOriginalName();
        $data['logo']->move(Storage::path('/public/img/tournament/').'origin/',$filename);
        $thumbnail = Image::make(Storage::path('/public/img/tournament/').'origin/'.$filename);
        $thumbnail -> fit(300,300);
        $thumbnail->save(storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'tournament' . DIRECTORY_SEPARATOR . 'thumbnail' . DIRECTORY_SEPARATOR . $filename));
        $data['logo'] = $filename;


        $filename = $data['background']->getClientOriginalName();
        $data['background']->move(Storage::path('/public/img/tournament/').'origin/',$filename);
        $thumbnail = Image::make(Storage::path('/public/img/tournament/').'origin/'.$filename);
        $thumbnail -> fit(300,300);
        $thumbnail->save(storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'tournament' . DIRECTORY_SEPARATOR . 'thumbnail' . DIRECTORY_SEPARATOR . $filename));
        $data['background'] = $filename;


        Tournament::create($data);
        return redirect()->route('tournaments.index');
    }
    public function show($id){
        $tour =Tournament::find($id);
        return view('tournaments.show', ['tour' => $tour]);
    }

    public function post(Request $request){
        $data = $request->all();
        Participation::create($data);
        return redirect()->route('tournaments.index');
    }
}
