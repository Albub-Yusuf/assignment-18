@extends('layouts.master')

@section('content')

<h3 class="text-center mt-2">Posts Table</h3>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post Title</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$serial++}}</th>
      <td>{{$post->name}}</td>
      <td>{{$post->category->name}}</td>
      <td>{{$post->description}}</td>
    </tr> 
    @endforeach
     
  </tbody>
</table>

@endsection