@extends('layouts.front')
@section('content')
<style>
  .price{
    text-decoration: line-through red;
  }
</style>
<section id="featured-services">
  <div class="container">
      <div class="col-lg-12 box">
      @foreach($promotion as $index=>$key)
        <div class="row">
          <div class="row">       
            <h2 class="text-center text-white">{{$key->proTitle}}</h2>
          </div>
          <div class="row">
        <div class="col-md-6">
        <img src="../img/intro-carousel/1.jpg" class="card-img" alt="qqq">
        </div>
        <div class="col-md-6 text-white" style="padding-right:0">
          <h5><a href="{{ url('/brandDetails',$key->comId) }}">{{$key->comName}}</a></h5>
          <h6 class="text-white">Promotion From <strong>{{$key->startProDate}} To {{$key->endProDate}}</strong></h6>
          <h6>Discount: {{$key->rateDiscount}} %</h6>
          <h6 style="font-size:20px">Price: <strong class="price">${{$key->price}}</strong> -> <strong>${{$key->balance}}</strong></h6>
          <p class="description text-justify">{{$key->description}}</p>
        </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


@endsection