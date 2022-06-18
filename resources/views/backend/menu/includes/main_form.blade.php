<div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                {{ Form::label('parent_id', 'Parent Id *', ['class' => 'card-header']); }}
                <div class="card-body">
                {{ Form::select('parent_id', $parentid, null, ['class'=>'form-select','id'=>'parent_id','placeholder'=>'Please choose Parent']) }}
                @include('backend.includes.validation_error_messages',['fieldname'=>'parent_id'])
                </div>
            </div>
            </div>
            <div class="col-md-6 ">
                <div class="card">
                    {{ Form::label('title', 'Title *', ['class' => 'card-header']); }}
                    <div class="card-body">
                    {{ Form::text('title', null, ['class'=>'form-control','id'=>'title','placeholder'=>'']) }}
                    @include('backend.includes.validation_error_messages',['fieldname'=>'title'])
                    </div>
                </div>
            </div>

</div>

<div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                {{ Form::label('rank', 'Rank', ['class' => 'card-header']); }}
                    <div class="card-body">
                    {{ Form::number('rank', null, ['class'=>'form-control','id'=>'rank','placeholder'=>'']) }}
                    @include('backend.includes.validation_error_messages',['fieldname'=>'rank'])
                    </div>
                </div>
            </div>
           <div class="col-md-6">
                <div class="card">
                    {{ Form::label('route', 'Route', ['class' => 'card-header']); }}
                        <div class="card-body">
                            {{ Form::text('route', null, ['class'=>'form-control','id'=>'route','placeholder'=>'']) }}
                            @include('backend.includes.validation_error_messages',['fieldname'=>'route'])
                        </div>
                </div>
            </div>
</div>


    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
            {{ Form::label('status', 'Status',["class" => "card-header"]) }}
            </div>
        </div>
        <div class="col-md-8">
            <label class="radio-inline">
                <label class="radio-inline">
                    {{ Form::radio('status',0, true) }} Show </label><span class="p-3"></span>
                    {{ Form::radio('status', 1, false) }} Hide </label>
        </div>
    </div>


</div>


<div class="modal-footer justify-content-center ">
<a href="{{route('about.index')}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></a>
<button type="submit" class="btn btn-primary btn-lg">Submit</button>


