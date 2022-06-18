@extends('layouts.backend')

@section('title')
Edit Our Works |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Edit Our Works Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('dashboard/update-works/'.$works->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Title</div>
                            <div class="card-body">
                            <input type="text" name="title" value="{{$works->title}}" class="form-control">
                            <div class="text-danger">{{$errors->first('title')}}</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Image</div>
                            <div class="card-body d-flex justify-content-between">
                            <input type="file" name="image" class="form-control w-50">
                            <img src="{{asset('uploads/works/'.$works->image)}}" class="img-fluid" width="80">
                            <div class="text-danger">{{$errors->first('image')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Description</div>
                    <div class="card-body">
                        <textarea name="description" class="form-control">{{$works->description}}</textarea>
                        <div class="text-danger p-2">{{$errors->first('description')}}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        <input type="checkbox" {{$works->status=='1'?'checked':''}}  name="status" class="form-check-input">
                    </div>
                </div>
            </div>
        </div>



<div class="modal-footer justify-content-center ">
  <a href="{{url('dashboard/our-works')}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></a>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>


</div>
@endsection

@section('script')
@endsection
