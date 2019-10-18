@extends('layouts.front')
@section('content')
<style>
  .img{
    width: 300px;
    height: 300px;
    border-radius: 50%;
  }
  .price{
    text-decoration: line-through red;
  }
  .proElement{
    margin-top: 3%;
    border-top:1px solid #18d26e;
  }
</style>
<section id="featured-services">
  <div class="container">
    @foreach($company as $index=>$key)
    <div class="row text-white">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img class="img" src="../img/intro-carousel/1.jpg" alt="company logo">
        <h1><a href="http://thepizzacompany-myanmar.com/" target="_blank">{{$key->comName}}</a></h1>
      </div>
      <p class="text-justify">{{$key->description}}</p>
      <div class="col-md-4"></div>
    </div>
    @endforeach
    <div class="row proElement">
    @foreach($promotions as $pro)
    <div class="col-lg-6 box">
        <div class="row">
        <div class="col-md-6">
          <img src="../img/intro-carousel/1.jpg" class="card-img" alt="qqq">
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
</section>


@endsection