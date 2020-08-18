<?php

namespace App\Http\Controllers;
use App\Poll;
use App\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $players = Player::All();
        return view('home',[
            'polls' => auth()->user()->timeline(),
            'players' => $players,
        ]);
    }
}
