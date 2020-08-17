<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model{

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}

