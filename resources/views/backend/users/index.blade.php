@extends('layouts.backend')

@section('title')
User Register
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User Registered Details
            </div>
            @if(session('status'))
            <div class="alert alert-success text-center">
                {{session('status')}}
            </div>
            @endif


            <div class="card-body">
                <table id="datatablesSimple" class="table-striped">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email No</th>
                            <th>User Role</th>
                            <th>Ban/Unban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email No</th>
                            <th>User Role</th>
                            <th>Ban/Unban</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user as $index=>$users )
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>

                                    @if($users->user_role=='1')
                                        <button class="btn btn-success btn-sm">Admin</button>
                                    @elseif($users->user_role=='2')
                                        <button class="btn btn-warning btn-sm">Manager</button>

                                    @elseif($users->user_role=='0')
                                        <button class="btn btn-danger btn-sm">Client</button>
                                    @endif

                            <td>
                                    @if($users->is_ban=='0')
                                        <button class="btn btn-primary btn-sm">Unban</button>
                                    @elseif($users->is_ban=='1')
                                        <button class="btn btn-danger btn-sm">Banned</button>

                                    @endif
                            </td>
                            <td class="d-flex justify-content-between">
                                <a href="{{url('/dashboard/edit-user/'.$users->id)}}"><i class="ri-edit-box-fill h5 text-primary"></i>
                                </a>
                                <a href="{{url('/dashboard/delete-user/'.$users->id)}}"><i class="ri-delete-bin-6-line h5 text-danger"></i></a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection
