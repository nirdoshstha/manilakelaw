<div class="row mb-3">
            <div class="col-md-6 ">
                <div class="card">
                    {{-- <div class="card-header">Title</div> --}}
                    {{ Form::label('title', 'Title *', ['class' => 'card-header']); }}
                    <div class="card-body">
                    {{-- <input type="text" name="title"  class="form-control"> --}}
                    {{ Form::text('title', null, ['class'=>'form-control','id'=>'title','placeholder'=>'']) }}
                    @include('backend.includes.validation_error_messages',['fieldname'=>'title'])
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                {{ Form::label('subtitle', 'SubTitle', ['class' => 'card-header']); }}
                   <div class="card-body">
                   {{ Form::text('subtitle', null, ['class'=>'form-control','id'=>'subtitle','placeholder'=>'']) }}
                   @include('backend.includes.validation_error_messages',['fieldname'=>'subtitle'])
                   </div>
               </div>
            </div>
</div>

<div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                {{ Form::label('image_field', 'Image', ['class' => 'card-header']); }}
                    <div class="card-body">
                    {{ Form::file('image_field', null, ['class'=>'form-control','id'=>'image_field','placeholder'=>'']) }}
                    @include('backend.includes.validation_error_messages',['fieldname'=>'image_field'])
                    </div>
                </div>
            </div>
           <div class="col-md-6">
                <div class="card">
                    {{ Form::label('slug', 'Slug', ['class' => 'card-header']); }}
                        <div class="card-body">
                            {{ Form::text('slug', null, ['class'=>'form-control','id'=>'slug','placeholder'=>'']) }}
                            @include('backend.includes.validation_error_messages',['fieldname'=>'slug'])
                        </div>
                </div>
            </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
            <div class="card">
                 {{ Form::label('description', 'Description *', ['class' => 'card-header']); }}
                <div class="card-body">
                {{ Form::textarea('description', null, ['class'=>'form-control','id'=>'description', 'rows'=>'2']) }}
                @include('backend.includes.validation_error_messages',['fieldname'=>'description'])
                </div>
           </div>
    </div>
</div>

<div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
                {{ Form::label('seo_title', 'Seo Title *', ['class' => 'card-header']); }}
                <div class="card-body">
                {{ Form::text('seo_title', null, ['class'=>'form-control','id'=>'seo_title','placeholder'=>'']) }}
                @include('backend.includes.validation_error_messages',['fieldname'=>'seo_title'])
                </div>
           </div>
        </div>

        <div class="col-md-4">
            <div class="card">
            {{ Form::label('seo_keyword', 'Seo Keyword', ['class' => 'card-header']); }}
            <div class="card-body">
            {{ Form::text('seo_keyword', null, ['class'=>'form-control','id'=>'seo_keyword','placeholder'=>'']) }}
            @include('backend.includes.validation_error_messages',['fieldname'=>'seo_keyword'])
            </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card">
            {{ Form::label('seo_desc', 'Seo Description', ['class' => 'card-header']); }}
               <div class="card-body">
               {{ Form::text('seo_desc', null, ['class'=>'form-control','id'=>'seo_desc','placeholder'=>'']) }}
               @include('backend.includes.validation_error_messages',['fieldname'=>'seo_desc'])
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


