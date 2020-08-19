<?php

namespace App\Http\Controllers;
use App\Poll;
use App\Player;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $players = User::find(auth()->user()->id)->player;
        return view('home',[
            'polls' => auth()->user()->timeline(),
            'players' => $players,
        ]);
    }
}
