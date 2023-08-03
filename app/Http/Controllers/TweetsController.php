<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class TweetsController extends Controller
{
//投稿一覧を表示する

    public function showlist()
    {
        $posts = Posts::all();
        return view('tweets.list',compact('posts'));
    }
}
