@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Upload New Photo</h2>
    <form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="album-id" id="{{ $albumId }}">
        <div class="form-group">
          <label for="titile">Title</label>
          <input type="text" class="form-control" name="title" id="title"  placeholder="Enter title">
        </div>
        <div class="form-group">name
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description"  placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
  
  
 
@endsection