@extends('layouts.backend')

@section('title')
Edit Our Services |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Edit Our Services Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('/dashboard/update-services/'.$services->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Title</div>
                            <div class="card-body">
                            <input type="text" name="title" value="{{$services->title}}"  class="form-control">
                            </div>
                        <div class="text-danger">{{$errors->first('title')}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Subtitle</div>
                            <div class="card-body">
                            <input type="text" name="subtitle" value="{{$services->subtitle}}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">icon</div>
                    <div class="card-body">
                    <input type="text" name="icon" value="{{$services->icon}}"  class="form-control" >
                    </div>
                    <div class="text-danger">{{$errors->first('image')}}</div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Description</div>
                    <div class="card-body">
                        <textarea name="description" class="form-control">{{$services->description}}</textarea>
                    </div>
                    <div class="text-danger">{{$errors->first('description')}}</div>

                </div>
            </div>

        </div>



        <div class="row mb-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Slug</div>
                    <div class="card-body">
                        <input type="text" name="slug" value="{{$services->slug}}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Order</div>
                    <div class="card-body">

                        <select name="order" class="form-select">
                            <option value="{{$services->order}}" selected>{{$services->order}}</option>
                            @for($i = 0; $i < 10; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor

                          </select>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        <input type="checkbox" class="form-check-input mt-0" name="status" >
                    </div>
                </div>
            </div>
        </div>


<div class="modal-footer justify-content-center ">
  <a href="{{url('dashboard/our-services')}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></a>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>


</div>
@endsection

@section('script')
@endsection
