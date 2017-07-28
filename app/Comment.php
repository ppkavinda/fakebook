<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'body',
		'post_id',
	];

    public function post(){
    	return $this->belongsTo(\App\Post::class);
    }

    public function user(){
    	return $this->belongsTo(\App\User::class);
    }
}
