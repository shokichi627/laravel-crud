@extends('layouts.layout')
@section('content')
<h1>Posts</h1>

<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th colspan="3"></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td><a href="/posts/{{$post->id}}">Show</a></td>
      <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
      <td>
        <form action="/posts/{{$post->id}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
          <input type="submit" name="" value="Destroy">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<br>
<a href="/posts/create">New Post</a>
@endsection