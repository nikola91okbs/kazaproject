@extends('layouts.admin')

@section('content')
<h2>Dashboard</h2>

<br>

<h3>New/Update image</h3>

<br>

<form action="/admin/artist/gallery/{{ $artist->id }}" method="post" enctype="multipart/form-data">
  @csrf
  Image: <input type="file" name="image" id="image"> <br>
  Description: <input type="text" name="description" id="description" value="{{ $artist->description ?? ''}}"> <br>
  <input type="submit" value="Create">
</form>

@endsection