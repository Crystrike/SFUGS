<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('games', ['games'=>$games]);

    }
    public function create(){
        return view('Games.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $filename = $data['image']->getClientOriginalName();
        $data['image']->move(Storage::path('/public/img/games/').'origin/',$filename);
        $thumbnail = Image::make(Storage::path('/public/img/games/').'origin/'.$filename);
        $thumbnail -> fit(300,300);
        $thumbnail->save(storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'games' . DIRECTORY_SEPARATOR . 'thumbnail' . DIRECTORY_SEPARATOR . $filename));
        $data['image'] = $filename;
        Game::create($data);
        return redirect()->route('games');
    }
}
