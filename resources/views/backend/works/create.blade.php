@extends('layouts.backend')

@section('title')
Add Our Works |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Add Our Works Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('dashboard/store-works')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Title</div>
                            <div class="card-body">
                            <input type="text" name="title"  class="form-control">
                            <div class="text-danger">{{$errors->first('title')}}</div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Image</div>
                            <div class="card-body">
                            <input type="file" name="image" class="form-control">
                            <div class="text-danger">{{$errors->first('image')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12 mb-1">
                <div class="card">
                    <div class="card-header">Description</div>
                    <div class="card-body">
                        <textarea name="description" class="form-control"></textarea>
                        <div class="text-danger p-2">{{$errors->first('description')}}</div>
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
