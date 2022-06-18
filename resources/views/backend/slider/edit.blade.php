@extends('layouts.backend')

@section('title')
Edit Slider | Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Edit Slider Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('/dashboard/update-slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Title</div>
                            <div class="card-body">
                            <input type="text" name="title" value="{{$slider->title}}" class="form-control">
                            </div>
                        <div class="text-danger">{{$errors->first('title')}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Subtitle</div>
                            <div class="card-body">
                            <input type="text" name="subtitle"value="{{$slider->subtitle}}"class="form-control">
                            </div>
                        <div class="text-danger">{{$errors->first('subtitle')}}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Image</div>
                    <div class="card-body d-flex justify-content-between">
                    <input type="file" name="image" class="form-control w-75 h-50" >
                    <img src="{{asset('uploads/header/'.$slider->image)}}" width="100" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        <input type="checkbox" {{$slider->status=='1'? 'checked' : ''}} name="status">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Url 1</div>
                    <div class="card-body">
                    <input type="text" name="url1" value="{{$slider->url1}}" class="form-control">
                    </div>
                    <div class="text-danger">{{$errors->first('description')}}</div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Url 2</div>
                    <div class="card-body">
                        <input type="text" name="url2" value="{{$slider->url2}}" class="form-control text-muted" placeholder="">
                    </div>
                </div>
            </div>


        </div>


<div class="modal-footer justify-content-center ">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</div>

</form>

    </div>


@endsection

@section('script')
@endsection
