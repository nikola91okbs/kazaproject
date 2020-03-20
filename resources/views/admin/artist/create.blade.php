@extends('layouts.admin')

@section('content')
<h2>Dashboard</h2>

<br>

<h3>New/Update artist</h3>

<br>

<form action="/admin/artist/" method="post" enctype="multipart/form-data">
  @csrf
  Title: <input type="text" name="title" id="title" value="{{ $artist->title ?? ''}}"> <br>
  Category: <select name="category_id" id="category_id">
  	@foreach($categories as $c)
  		<option value="{{ $c->id}}">{{ $c->name }}</option>
  	@endforeach
  </select><br>
  Video: <input type="text" name="video" id="video" value="{{ $artist->video ?? ''}}"> <br>
  Image: <input type="file" name="image" id="image"> <br>
  Description: <input type="text" name="description" id="description" value="{{ $artist->description ?? ''}}"> <br>
  Location: <input type="text" name="location" id="location" value="{{ $artist->location ?? ''}}"> <br>  
  Price: <input type="text" name="price" id="price" value="{{ $artist->price ?? ''}}"> <br>
  <input type="submit" value="Create">
</form>

@endsection