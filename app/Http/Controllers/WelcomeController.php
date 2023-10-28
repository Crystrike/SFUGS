<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function show(){
        $qwe = Tournament::all();
        return view('test', ['tours'=>$qwe]);
    }
}
