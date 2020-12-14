<?php

namespace App\Http\Controllers\Cms\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BlogComment;
use App\BlogArticle;
use App\UserComment;


class BlogCommentController extends Controller
{
    public function addComment(Request $request)
    {
        $datos = $request->validate([
                'name' => 'required|max:191',
                'email' => 'required|max:191',
                'article_id' => 'required',
                'comment_id' => 'required',
                'comment' => 'required'
            ]);

        $comentario = BlogComment::create([
            'comment' => $datos['comment'],
            'article_id' => $datos['article_id'],
            'padre_id' => $datos['comment_id']
        ]);
        
        $user = UserComment::create([
            'name' =>  $datos['name'],
            'email' => $datos['email'],
            'comment_id' => $comentario->id,
        ]);

        $data = [
            'comentario' => $comentario,
            'user' => $user,
        ];

    	
        return response()->json($data, 200);
    	
    }

    public function getComments($id)
    {


    	$articulo = BlogArticle::find($id);

    	$comments = $articulo->comments;

    	return response()->json($comments, 200);
    }


    public function deleteComment($id)
    {
    	$comentario = BlogComment::find($id);
    	$comentario->delete();

    	return response()->json('', 200);
    }

}
