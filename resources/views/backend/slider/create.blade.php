@extends('layouts.backend')

@section('title')
Add Slider |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h3">Add Slider Details</div>
            </div>
        </div>
    </div>

    <form action="{{url('dashboard/store-slider')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header">Title</div>
                            <div class="card-body">
                            <input type="text" name="title"  class="form-control">
                            </div>
                        <div class="text-danger">{{$errors->first('title')}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Subtitle</div>
                            <div class="card-body">
                            <input type="text" name="subtitle" class="form-control">
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
                    <div class="card-header">Image1</div>
                    <div class="card-body">
                    <input type="file" name="image" class="form-control" >
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        <input type="checkbox" name="status">
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-2">
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Url 1</div>
                    <div class="card-body">
                    <textarea name="url1" class="form-control"></textarea>
                    </div>
                    <div class="text-danger">{{$errors->first('description')}}</div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Url 2</div>
                    <div class="card-body">
                        <textarea name="url2" class="form-control text-muted" placeholder=""></textarea>
                    </div>
                </div>
            </div>



        </div>


<div class="modal-footer justify-content-center ">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>
    </div>

</div>

</form>

    </div>

    </div>

         </div>

</div>

</div>
@endsection

@section('script')
@endsection
