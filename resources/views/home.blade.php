@extends('layout.master')
@section('title','Home')
@section('content')
<div class="container-fluid my-3">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-4">
      @include('layout.sidebar')
    </div>
    <!-- End sidebar -->
    <div class="col-md-8 my-3">

      <div class="row">
        @foreach($products as $product)
        <div class="my-3">
          <div class="thumbnail" style="width:220px;border:1px solid #f80;">
            <div class="text-center">
              {{$product->price}} Kyats
            </div>
            <img src="{{ asset('/images/'.unserialize($product->imgs)[1]) }}" alt="Sample Image" class="img-fluid">
            <div class="caption">
              <h3 class="text-center">{{$product->title}}</h3>
              <p>
                {{$product->description}}
              </p>
              <p>
                <a href="#" class="btn btn-info">Detail</a> <a href="{{ action('PageController@add',$product->id) }}" class="btn btn-danger">Add To Cart</a>
              </p>
            </div>
          </div>



        </div>

        @endforeach
      </div>

    </div>
  </div>
</div>
@endsection