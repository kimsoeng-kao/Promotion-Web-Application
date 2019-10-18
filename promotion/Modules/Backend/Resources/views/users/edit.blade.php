@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Update User
            <a href="{{url('backend/company')}}" class="btn btn-primary btn-sm btn-oval">
            <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        @foreach ($users as $c)
        <form action="{{url('backend/user/update')}}" method="POST">
            @csrf
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
                      
                        <input type="hidden" id="id" 
                                name='id' value="{{($c->id)}}">
                        <label for="">Username :</label>
                        <input type="text" class="form-control" id="name" 
                                name='username' required autofocus value="{{($c->username)}}">
                        <br>
                        <label for="">Email :</label>
                        <input type="text" class="form-control" id="description" 
                                name='email' required autofocus value="{{($c->email)}}">
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-4">
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