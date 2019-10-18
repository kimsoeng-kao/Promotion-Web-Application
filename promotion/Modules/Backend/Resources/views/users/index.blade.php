@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
    <div class="card-block">
        <h5>Promotions
                <a href="{{url('backend/user/create')}}" class="btn btn-primary btn-sm btn-oval">
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>UserName</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($users as $u)
                    <tr>
                        <td>{{$i++}}</td>
                       
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->username}}</td>
                        <td>
                            <a href="{{url('backend/user/delete?id='.$u->id)}}" class="text-danger" title="Delete"
                            onclick="return confirm('Are you sure to delete?')">
                             
                                <i class="fa fa-trash"></i>
                            </a>
                            &nbsp;&nbsp;
                            <a  href="{{url('backend/user/edit?id='.$u->id)}} class="text-success">
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