@extends('layouts.backend',['page'=>'Create'])

@section('title','Create'.'| '.$panel)

@section('content')

<div class="container px-3">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-4">
                    <div class="d-flex justify-content-between">
                    <h4 class="float-start"><i class="fas fa-pencil-alt"></i> Create {{$panel}}</h4>
                    <a href="{{route($base_route.'index')}}" class="btn btn-success"><i class="fas fa-list"></i>List</a>
                    </div>
            </div>
            </div>
        </div>
    </div>

    {{-- <form action="{{url('dashboard/store-about-us')}}" method="POST" enctype="multipart/form-data"> --}}
        {{-- {{csrf_field()}} --}}

        {{ Form::open(['route' => $base_route.'store','method'=>'post','files'=>'true']) }}
             @include($view_path.'includes.main_form')
        {!! Form::close() !!}



    {{-- </form> --}}


</div>
@endsection

@section('script')

@include('backend.includes.script')
@endsection
