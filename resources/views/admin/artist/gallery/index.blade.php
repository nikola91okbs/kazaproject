@extends('layouts.admin')

@section('content')
<h2>Dashboard</h2>

<br>

<h4>{{ $artist->title }}'s gallery</h4>

<br>

<a href="/admin/artist/gallery/{{ $artist->id }}/create">
  <button style="padding: 10px, 5px;"><h5>New image</h5></button>
</a>

<br><br>

@if(sizeof($gallery) != 0)
<h3 style="padding-left: 25px;">Images</h3> <br>

  @foreach ($gallery as $image)
        <div style="display: inline-block;">
          <img src="{{ $image->image }}" width="150" alt="{{ $image->description }}"> <br> 
          <center><a href="/admin/artist/gallery/delete/{{ $image->id }}">[ X ]</a></center>
        </div>
  @endforeach
@else
  <p>There is no images in this gallery yet.</p>
@endif
@endsection