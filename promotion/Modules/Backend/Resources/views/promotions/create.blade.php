@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Create promotion item
            <a href="{{url('backend/promotion')}}" class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        <form action="{{url('backend/promotion/save')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="proTitle" class="col-sm-4">Promotion Title
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="proTitle" name='proTitle' required autofocus value="{{old('proTitle')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rateDiscount" class="col-sm-4">Disount Rate
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="number" placeholder="%" class="form-control" id="rateDiscount" name='rateDiscount' required value='{{old('rateDiscount')}}'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-4">Price
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="price" name='price' required value='{{old('price')}}'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startProDate" class="col-sm-4">Start Promotion
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="startProDate" name='startProDate' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="endProDate" class="col-sm-4">End Promotion
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="endProDate" name='endProDate' required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="catId" class="col-sm-4">Choose Category
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control" name="catId">
                                <option></option>
                                @foreach ($categories as $c)
                                <option value="{{$c->catId}}">{{$c->catName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comId" class="col-sm-4">Choose company
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control" name="comId">
                                <option></option>
                                @foreach ($companies as $c)
                                <option value="{{$c->comId}}">{{$c->comName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-4">Promotion Details
                            <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" style="width:65%;height: 116px;"></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4">Photo</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name='photo' accept='image/x-png,image/gif,image/jpeg'>
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