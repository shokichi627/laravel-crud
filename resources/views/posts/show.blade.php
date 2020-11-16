@extends('layouts.layout')

@section('content')
<p>
  <strong>Title:</strong>
  {{$post->title}}
</p>

<p>
  <strong>Content:</strong>
  {{$post->content}}
</p>
<a href="/posts/{{$post->id}}/edit">Edit</a> |
<a href="/posts">Back</a>
@endsection