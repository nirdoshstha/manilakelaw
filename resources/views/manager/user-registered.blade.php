@extends('layouts.manager')

@section('title')
Manager | Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                User Registered Details
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table ">
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
                         @foreach ($user as $index => $users )
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>
                                @if($users->user_role=='0') 
                                    
                                        <button class="btn btn-danger btn-sm">Client</button>
                                @elseif ($users->user_role=='1')  
                                        <button class="btn btn-success btn-sm">Admin</button>
                                @elseif($users->user_role=='2')
                                        <button class="btn btn-primary btn-sm">Manager</button>
                                @endif
                            <td>
                                <button class="btn btn-success btn-sm">Unban</button>
                            </td>
                            <td class="d-flex justify-content-between">
                            
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