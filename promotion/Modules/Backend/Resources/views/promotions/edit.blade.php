@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Promotion Details
            <a href="{{url('backend/promotion')}}" class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-reply"></i> Back</a>
        </h5>
        <hr>
        @foreach ($promotion as $p)
        <form action="{{url('backend/promotion/update')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="proId" class="col-sm-4">Promotion Id
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <!-- {{$p->proId}} -->
                    <input type="hidden" value="{{$p->proId}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="proTitle" class="col-sm-4">Promotion Title
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="proTitle" name='proTitle' required autofocus value="{{$p->proTitle}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="rateDiscount" class="col-sm-4">Disount Rate %
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="number" placeholder="%" class="form-control" id="rateDiscount" name='rateDiscount' required value="{{$p->rateDiscount}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-4">Price $
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="price" name='price' required value="{{$p->price}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="createdDate" class="col-sm-4">Created Date
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="createdDate" name='createdDate' value="{{$p->createdDate}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="startProDate" class="col-sm-4">Start Promotion
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="startProDate" name='startProDate' value="{{$p->startProDate}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="endProDate" class="col-sm-4">End Promotion
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="endProDate" name='endProDate' value="{{$p->endProDate}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="catId" class="col-sm-4">Category
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <select class="form-control" name="catId" value="{{$p->catId}}">
                        <option value="{{$p->catId}}" style="color:white"></option>
                        @foreach ($categories as $c)
                        <option value="{{$c->catId}}">{{$c->catName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="comId" class="col-sm-4">Company
                    <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <select class="form-control" name="comId" value="{{$p->comId}}">
                        <option value="{{$p->comId}}" style="color:white"></option>
                        @foreach ($companies as $c)
                        <option value="{{$c->comId}}">{{$c->comName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-4">Promotion Details
                    <span class="text-danger">*</span></label>
                <textarea name="description" id="description" style="width:65%;height: 116px;">
                {{$p->description}}
                </textarea>
            </div>
            <div class="row">
                <button style="submit" class="btn btn-success">Save</button>
            </div>
    </div>
</div>
</form>
@endforeach
</div>
</div>
@endsection