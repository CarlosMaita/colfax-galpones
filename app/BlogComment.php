<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = ['comment', 'article_id', 'status_id', 'reader_id', 'padre_id'];


    public function article()
    {
    	return $this->belongsTo('App\BlogArticle', 'article_id');
    }

    public function comentarist()
    {
    	return $this->hasOne('App\UserComment', 'comment_id');
    }
}
