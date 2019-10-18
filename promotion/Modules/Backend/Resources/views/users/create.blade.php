@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Create User
                <a href="{{url('backend/user')}}" class="btn btn-primary btn-sm btn-oval">
                    <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        <form action="{{url('backend/user/save')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-9">
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
                    <div class="form-group row">
                        <label for="name" class="col-sm-4">Name 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" 
                                name='name' required autofocus value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4">Email 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" 
                                name='email' required value='{{old('email')}}'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-4">Username 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" 
                                name='username' required value='{{old('username')}}'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4">Password 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" 
                                name='password' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpass" class="col-sm-4">Confirm Pass. 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="cpass" 
                                name='cpass' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4"></label>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-oval">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection