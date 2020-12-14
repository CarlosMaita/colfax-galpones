<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    protected $fillable = ['name', 'email', 'comment_id'];


    public function comment()
    {
    	return $this->belongsTo('App\BlogComment', 'comment_id');
    }
}
