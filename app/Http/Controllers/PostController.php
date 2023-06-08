<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        // Protect malisious codes like CSS, HTML to the title and textarea body, use bellow code
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        // the user_id (post table) must hold the primary of id (user table) of the post owner as a forienkey
        $incomingFields['user_id'] = auth()->id();

        //  $incomingFields is ready to be saved into a databse, so letus create a model for post databse
         Post::create($incomingFields);
         //by defualt laravel has a model for a uses, doesn't for post table, so create model
         // create singular table name for a model name with uppercase first
         // table name 'posts' and 'Post'  for the model
         //php artisan make:model Post
         
         return redirect('/');

    }
}
