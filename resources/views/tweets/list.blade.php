

@extends('tweets.layout')
@section('title','つぶやき一覧')

<!--つぶやき投稿-->
@section('content')
<h1>ホーム</h1>
<section class="tweet">
<input type="text" class="textbox" placeholder=いまどうしてる？>
<br>
<input type="submit" class="tweetbutton" value="つぶやく">
</section>  
@endsection

<!--投稿一覧表示  -->
@section('comment')
<main class="tweetbox">
  @foreach ($posts as $post)    
  <p class="user_id">{{$post->user->user_id}}</p>
  <p class="body">{{$post->user->body}}</p>
  <p class="created_at">{{$post->user->created_at}}</p>

  @endforeach
 
</main>


@endsection


 