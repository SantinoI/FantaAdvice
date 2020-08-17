<?php

namespace App\Http\Controllers;
use App\Poll;
use Illuminate\Http\Request;

class PollController extends Controller{

    public function store(Request $request){

        Poll::create([
            'user_id' => auth()->id(),
            'player1' =>  $request->input('player1_selected'),
            'player2' =>  $request->input('player2_selected')
        ]);

        

        return redirect('/home');
    }
}
