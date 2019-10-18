@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Promotions
            <a href="{{url('backend/promotion/create')}}" class="btn btn-primary btn-sm btn-oval">
                <i class="fa fa-plus"></i> Add</a>
        </h5>
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
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Promotion Title</th>
                    <th>Discount Rate</th>
                    <th>Created Date</th>
                    <th>Start Promotion Date</th>
                    <th>End Promotion Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($promotions as $p)
                <tr>
                    <td>{{$i++}}</td>

                    <td>{{$p->proTitle}}</td>
                    <td>{{$p->rateDiscount}}</td>
                    <td>{{$p->createdDate}}</td>
                    <td>{{$p->startProDate}}</td>
                    <td>{{$p->endProDate}}</td>
                    <td>
                        <a href="{{url('backend/promotion/details?id='.$p->proId)}}" class="text-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{url('backend/promotion/delete?id='.$p->proId)}}" class="text-danger" title="Delete" onclick="return confirm('Are you sure to delete?')">

                            <i class="fa fa-trash"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{url('backend/promotion/edit?id='.$p->proId)}}" class="text-success">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection