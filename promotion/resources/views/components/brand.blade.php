@extends('layouts.front')
@section('content')
<section id="featured-services">
  <div class="container">
    <div class="row">
      @foreach($companies as $com)
      <div class="col-lg-2 box">
      <a href="{{ url('/brandDetails',$com->comId) }}">
      <div class="panel panel-primary">
        <div class="panel-heading"><img src="img/intro-carousel/1.jpg" class="card-img" alt="qqq"></div>
        <div class="panel-body text-white">{{$com->comName}}</div>
      </div>
      </a>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- #featured-services -->


@endsection