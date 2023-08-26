@extends('main.layout')
@section('title','つぶやき一覧')

<!--つぶやき投稿-->
@section('content')
<h1>ホーム</h1>
<section class="tweet">
  <form action={{url('/main')}} method="post">
    @csrf
<input type="text" class="textbox" placeholder=いまどうしてる？>
<br>
<input type="submit" class="tweetbutton" value="つぶやく">
  </form>
</section>  
@endsection

<!--投稿一覧表示  -->
@section('comment')
<div class="main">
<div class="tweetbox">
  @foreach ($posts as $post)    
  <div class="userid">{{$post->user_id}}</div>
  <div class="created_at">{{$post->created_at}}</div>
</div>
<div class="body">{{$post->body}}</div>
</div>
  @endforeach

<div>{{$post->user_id}}</div>

 



@endsection