@extends('layouts.backend')

@section('title')
Add Review |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Add Review Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('/dashboard/store-review')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Name</div>
                            <div class="card-body">
                            <input type="text" name="name"  class="form-control">
                            <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Designation</div>
                            <div class="card-body">
                            <input type="text" name="designation" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Image</div>
                    <div class="card-body">
                    <input type="file" name="image" class="form-control" >
                    <div class="text-danger p-2">{{$errors->first('image')}}</div>
                    </div>


                </div>
            </div>

            <div class="col-md-6">
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
  <a href="{{url('dashboard/review')}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></a>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>


</div>
@endsection

@section('script')
@endsection
