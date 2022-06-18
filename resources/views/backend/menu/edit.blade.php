@extends('layouts.backend')

@section('title')
Edit {{$panel}} |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between py-4">
                    <span class="card-title h5"><i class="fas fa-edit"></i> Edit {{ $panel }}</span>


            <div>
                    <a class="btn btn-primary btn-md  " href="{{ route($base_route.'index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                    <a class="btn btn-success btn-md  " href="{{ route($base_route.'create') }}">
                        <i class="fas fa-pencil-alt"></i>
                        Create
                    </a>
            </div>
        </div>
    </div>

    {{--  <form action="{{url('dashboard/update-about-us/'.$about->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}  --}}

       {{ Form::model($data, ['route' => [$base_route.'update', $data->id], 'method'=>'put', 'files'=>'true']) }}

            @include($view_path.'includes.main_form')
        {!! Form::close() !!}
{{--

</form>  --}}


</div>
@endsection

@section('script')
@include('backend.includes.script')
@endsection
