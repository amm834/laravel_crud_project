@extends('layout.master')
@section('title','Create Product')
@section('content')
<div class="col-md-8 offset-md-2 my-5">
  <form class="col-md-12" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    @if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
    @endif
  <div class="form-group"> 
    <label for="exampleFormControlInput1">Product Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="My Product" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="100" name="price">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Choose Images</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file[]" multiple>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
    <input type="submit" name="create" class="btn btn-outline-success btn-block">
</form>
</div>
@endsection
