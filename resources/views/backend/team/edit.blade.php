@extends('layouts.backend')

@section('title')
Edit Our Team |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Edit Our Team Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('dashboard/update-team/'.$team->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Name</div>
                            <div class="card-body">
                            <input type="text" name="name" value="{{$team->name}}" class="form-control">
                            <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Image</div>
                            <div class="card-body d-flex justify-content-between">
                            <input type="file" name="image" class="form-control w-75 h-50">
                            <img src="{{asset('uploads/team/'.$team->image)}}" class="img-fluid" width="60">
                            <div class="text-danger">{{$errors->first('image')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Designation</div>
                    <div class="card-body">
                        <input type="text" name="designation" value="{{$team->designation}}" class="form-control">
                        <div class="text-danger p-2">{{$errors->first('designation')}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Facebook Links</div>
                    <div class="card-body">
                         <input type="text" name="facebook" value="{{$team->facebook}}" class="form-control">
                   </div>
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Twitter Links</div>
                    <div class="card-body">
                         <input type="text" name="twitter" value="{{$team->twitter}}" class="form-control">
                   </div>
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Youtube Links</div>
                    <div class="card-body">
                         <input type="text" name="youtube" value="{{$team->youtube}}" class="form-control">
                   </div>
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Instagram Links</div>
                    <div class="card-body">
                        <input type="text" name="instagram" value="{{$team->instagram}}" class="form-control">
                   </div>
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        <input type="checkbox" name="status" {{$team->status=='1'?'checked':''}} class="form-check-input">
                    </div>
                </div>
            </div>
        </div>



<div class="modal-footer justify-content-center ">
  <a href="{{url('dashboard/team')}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></a>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>


</div>
@endsection

@section('script')
@endsection
