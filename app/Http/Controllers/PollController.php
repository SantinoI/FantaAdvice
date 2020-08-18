<?php

namespace App\Http\Controllers;
use App\Poll;
use Illuminate\Http\Request;

class PollController extends Controller{

    public function store(Request $request){

        $player1_check = request()->validate(['player1_selected' => 'required|min:1']);
        
        $player2_check = request()->validate(['player2_selected' => 'required|min:1']);

        Poll::create([
            'user_id' => auth()->id(),
            'player1' =>  $player1_check['player1_selected'],
            'player2' =>  $player2_check['player2_selected']
        ]);

        return redirect('/home');
    }
}
