@extends('layouts.admin')

@section('content')
<h2>Dashboard</h2>

<br>

<a href="/admin/artist/create">
  <button style="padding: 10px, 5px;"><h4>New artist</h4></button>
</a>

<br><br>

@if(sizeof($artists) != 0)
<h3 style="padding-left: 25px;">Artists list</h3> <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Gallery</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($artists as $artist)
      <tr>
        <td scope="row">{{$loop->iteration}}.</td>
        <td>{{ $artist->title }}</td>
        <td>{{ $artist->category_id }}</td>
        <td>{{ $artist->description }}</td>
        <td> <a href="/admin/artist/gallery/{{ $artist->id }}">{{ $artist->title }}'s photos</a> </td>
        <td> <a href="/admin/artist/create/{{ $artist->id }}"><button class="btn btn-info">Edit</button></a> </td>
        <td> 
          <form action="/admin/artist/delete/{{ $artist->id }}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  @csrf
          <button id="btnDelete"class="btn btn-danger btn-sm">Delete</button>
         </form>
<script type="javascript">
       document.onsubmit=function(){
           return confirm('Sure?');
       }
</script>
        </td>
      </tr>
  @endforeach
  </tbody>
  </table>
@else
  <p>There is no artists yet.</p>
@endif
@endsection