<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function showlist()
    {
        $posts = Post::all();
        return view('main.list',compact('posts'));
    }

    public function create(Request $request)
    {
        $posts = new Post;
        $posts->user_id = $request->user_id;
        $posts->body = $request->body;
        $posts->created_at = $request->created_at;
        $posts->save();
        return redirect('/main');
    }

}
