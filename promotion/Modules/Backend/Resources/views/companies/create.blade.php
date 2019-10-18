@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Create Company
                <a href="{{url('backend/company')}}" class="btn btn-primary btn-sm btn-oval">
                    <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        <form action="{{url('backend/company/save')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="name" class="col-sm-4">Company Name 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" 
                                name='name' required autofocus value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-4">Description 
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="description" 
                                name='description' required value="{{old('description')}}">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-sm-4">Photo</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" 
                                name='photo' accept='image/x-png,image/gif,image/jpeg' 
                                onchange="loadPhoto(event)">
                            <p style='margin-top: 12px'>
                                <img src="" id='img' width="120">
                            </p>
                        </div>
                    </div> -->
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
@section('script')
    <script>
        $(document).ready(function () {
            $("#sidebar-menu li ").removeClass("active open");
      $("#sidebar-menu li ul li").removeClass("active");
      
            $("#menu_security").addClass("active open");
      $("#security_collapse").addClass("collapse in");
            $("#menu_user").addClass("active");
      
        });
        function loadPhoto(e)
        {
            var img = document.getElementById('img');
            img.src = URL.createObjectURL(e.target.files[0]);
        }
    </script>
@endsection