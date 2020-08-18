<?php

namespace App\Http\Controllers;
use App\Poll;
use App\Player;
<<<<<<< HEAD
use App\User;
=======
>>>>>>> master
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
<<<<<<< HEAD
        $players = User::find(auth()->user()->id)->player;
=======
        $players = Player::All();
>>>>>>> master
        return view('home',[
            'polls' => auth()->user()->timeline(),
            'players' => $players,
        ]);
    }
}
