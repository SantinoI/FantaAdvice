<?php

namespace App\Http\Controllers;
use App\Poll;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home',[
            'polls' => auth()->user()->timeline()
        ]);
    }
}
