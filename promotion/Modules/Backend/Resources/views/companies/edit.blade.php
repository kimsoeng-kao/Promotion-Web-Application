@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Update Company
            <a href="{{url('backend/company')}}" class="btn btn-primary btn-sm btn-oval">
            <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        @foreach ($companies as $c)
        <form action="{{url('backend/company/update')}}" method="post">
            <div>
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>
                            {{session('success')}}
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>
                            {{session('error')}}
                        </p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @php($i=1)
                      
                        <input type="text" id="comId" 
                                name='comId' value="{{($c->comId)}}">
                        <label for="">Company Name :</label>
                        <input type="text" class="form-control" id="name" 
                                name='name' required autofocus value="{{($c->comName)}}">
                        <br>
                        <label for="">Description :</label>
                        <input type="text" class="form-control" id="description" 
                                name='description' required autofocus value="{{($c->description)}}">
                   
                    <div class="form-group row">
                        <label class="col-sm-4"></label>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-oval">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection