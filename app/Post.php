<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title','body',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    // public function userN(){
    //     return $this->hasMany('App\User');
    // }
}
