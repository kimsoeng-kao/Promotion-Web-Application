@extends('layouts.front')
@section('content')
<style>
  .price{
    text-decoration: line-through red;
  }
</style>
<section id="featured-services">
  <div class="container">
    <div class="row">
      @foreach($promotions as $pro)
      <div class="col-lg-6 box">
        <div class="row">
        <div class="col-md-6">
          <img src="img/intro-carousel/1.jpg" class="card-img" alt="qqq">
        </div>
        <div class="col-md-6" style="padding-right:0">
          <h4 class="title"><a href="{{ url('/details',$pro->proId) }}">{{$pro->proTitle}}</a></h4>
          <small><a href="{{ url('/brandDetails',$pro->comId) }}">{{$pro->comName}}</a></small>
          <p class="description text-justify">{{$pro->description}}</p>
          <p style="font-size:20px"><strong class="price">${{$pro->price}}</strong> - <strong>${{$pro->balance}}</strong></p>
        </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- #featured-services -->


@endsection