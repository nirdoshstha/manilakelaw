@extends('layouts.backend')

@section('title')
{{$panel}} | Dashboard
@endsection


@section('content')
<div class="container">
    <div class="row py-3">
        <div class="col-lg-12 mt-0">
            <div class="card-header d-flex justify-content-between py-4">
                <span><h5><i class="fas fa-table me-1"></i>{{$panel}} </h5></span>

                <a href="{{route($base_route.'create')}}">
                <button class="btn btn-primary">
                    <i class="ri-file-add-fill fs-6"></i> Add {{$panel}}  </button>
                </a>
            </div>
            @include('backend.includes.flash_messages')


            <table class="table table-hover table-bordered mt-4">
                <thead class="table-light">
                    <tr>
                    <th style="width: 5%">S.n</th>
                    <th style="width: 15%">Title</th>
                    <th style="width: 15%">Subtitle</th>
                    <th style="width: 10%">Image</th>
                    <th style="width: 35%">Description</th>
                    <th style="width: 20%">Action</th>

                </tr>
            </thead>
                <tbody>
                    @foreach($data as $datas)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$datas->title}}</td>
                        <td>{{$datas->subtitle}}</td>
                        <td><img src="{{asset($img_path.$datas->image)}}" width="100"></td>
                        <td>{!!$datas->description!!}</td>
                        <td>
                            <form action="{{route($base_route.'destroy',['id'=>$datas->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route($base_route.'view',['id'=>$datas->id])}}" class="btn btn-success btn-sm">View</a>
                            <a href="{{route($base_route.'edit',['id'=>$datas->id])}}" class="btn btn-primary btn-sm">Edit</a>

                                <a href="#" class="btn btn-danger btn-sm delete-confirm">Delete</a>
                            </form>

                        </td>


                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection


@section('script')

@include('backend.includes.script')
@endsection
