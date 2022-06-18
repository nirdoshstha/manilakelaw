@extends('layouts.backend')

@section('title')
Edit User |Dashboard
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <h3>Edit User </h3>
                </div>
            </div>
        </div>

    <form action="{{url('/dashboard/update-user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row col-lg-9">

            <div class="input-group mt-3">
                <span class="input-group-text col-lg-3">First Name</span>
                <input type="text" name="name" value="{{$user->name}}" aria-label="First Name" class="form-control col-lg-9">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text col-lg-3">Email No</span>
                <input type="text" name="email" value="{{$user->email}}" aria-label="Email No" class="form-control col-lg-9">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text col-lg-3">User Role</span>
                <select name="user_role" class="form-select">
                    <option value="{{$user->user_role}}">
                        @if($user->user_role=='0')
                        Client
                        @elseif($user->user_role=='1')
                        Admin
                        @elseif ($user->user_role=='2')
                        Manager
                        @endif
                    </option>


                    <option value="0" >Client</option>
                    <option value="1" >Admin</option>
                    <option value="2" >Manager</option>

                </select>
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text col-lg-3">Ban / Unban</span>
                <select name="ban_unban" class="form-select" >
                    <option value="{{$user->is_ban}}">{{$user->is_ban=='1'?'Ban':'Unban'}}</option>
                    <option value="0">Unban</option>
                    <option value="1">Ban</option>

                </select>
            </div>

            <div class="mt-3 d-flex justify-content-between py-3">
                <a href="{{url('dashboard/user-registered')}}"><button type="submit" class="btn btn-danger px-5 py-2">Close</button></a>
                <button type="submit" class="btn btn-primary px-5 py-2">Save</button><span class="p-4 "></span>


            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
@endsection
