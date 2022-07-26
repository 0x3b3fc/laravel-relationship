<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
//        $post = Post::find(2);
//        return $post->comments;

//        foreach ($post->comments as $comment){
//            echo $comment->body . "<br>";
//        }

        $comment = Comment::find(3);
        return $comment->post;

    }
}
