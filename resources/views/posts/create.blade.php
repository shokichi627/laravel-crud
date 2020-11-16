@extends('layouts.layout')

@section('content')
<h1>New Post</h1>
<form action="/posts" method="post">
  {{-- 以下を入れないとエラーになる --}}
  {{ csrf_field() }}
  <div class="field">
    <label for="title">タイトル</label>
    <input type="text" name="title" placeholder="記事のタイトルを入れる">
  </div>
  <div class="field">
    <label for="content">内容</label>
    <textarea name="content" placeholder="記事の内容を入れる"></textarea>
  </div>
  <div class="actions">
    <input type="submit" value="送信">
  </div>
</form>

<a href="/posts">Back</a>
@endsection