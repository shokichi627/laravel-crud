<h1>Editing Post</h1>

@extends('layouts.layout')

@section('content')
<form action="/posts/{{$post->id}}" method="post">
  {{ csrf_field() }}
  <div class="field">
    <label for="title">タイトル</label>
    <input type="text" name="title" placeholder="記事のタイトルを入れる" value="{{$post->title}}">
  </div>
  <div class="field">
    <label for="content">内容</label>
    <textarea name="content" placeholder="記事の内容を入れる">{{$post->content}}</textarea>
  </div>
  <div class="actions">
    <input type="hidden" name="_method" value="patch">
    <input type="submit" value="Update">
  </div>
</form>
<a href="/posts/{{$post->id}}">Show</a> |
<a href="/posts">Back</a>
@endsection