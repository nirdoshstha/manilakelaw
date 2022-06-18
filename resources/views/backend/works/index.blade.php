@extends('layouts.backend')

@section('title')
Our Work | Dashboard
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-0">
            <div class="card-header d-flex justify-content-between">
                <span><i class="fas fa-table me-1"></i>Our Work Details</span>

                <a href="{{url('dashboard/create-works')}}">
                <button class="btn btn-primary">
                    <i class="ri-file-add-fill fs-6"></i> Add Details</button>
                </a>
            </div>
            @if(session('status'))
            <div class="alert alert-success text-center">
                {{session('status')}}
            </div>
            @endif


            <table class="table table-hover table-striped table-bordered mt-4">
                <thead class="table-light text-primary">
                  <th>S.n</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($works as $index=>$work )
                  <tr>
                     <td>{{++$index}}</td>
                     <td>{{$work->title}}</td>
                     <td><img src="{{asset('uploads/works/'.$work->image)}}" class="img-fluid" width="100"></td>
                     <td>{{$work->description}}</td>
                     <td><input type="checkbox" {{$work->status=='1'?'checked':''}}></td>
                     <td class="d-flex justify-content-between">
                        <a href="{{url('dashboard/edit-works/'.$work->id)}}"><i class="ri-edit-box-fill h5 text-primary"></i>
                        </a><span class="p-3"></span>
                        <a href="{{url('dashboard/delete-works/'.$work->id)}}" onclick="return confirm('Are You Sure You want to delete this ?');" i class="ri-delete-bin-6-line h5 text-danger"></i></a>

                    </td>
                  </tr>

                    @endforeach

                </tbody>
              </table>
        </div>
    </div>


    <div class="row py-5">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>


</div>
@endsection


@section('script')
@endsection
