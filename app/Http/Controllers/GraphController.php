<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;

class GraphController extends Controller
{
    private $api;
    public function __construct(Facebook $fb)
    {
        $this->middleware(function ($request, $next) use ($fb) {
            $fb->setDefaultAccessToken(Auth::user()->facebook_id);
            $this->api = $fb;
            return $next($request);
        });
    }


    public function publishToProfile(){
        try {
            $response = $this->api->post('/me/feed', [
                'message' => "Test"
            ])->getGraphNode()->asArray();
            if($response['id']){
               // post created
            }
        } catch (FacebookSDKException $e) {
            dd($e); // handle exception
        }
    }
}
