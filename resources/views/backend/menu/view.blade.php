@extends('layouts.backend')

@section('title')
View {{$panel}} Page
@endsection

@section('content')
<div class="container px-3">
        <div class="row py-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between py-4">
                        <span class="card-title h5"><i class="fas fa-eye"></i> View {{ $panel }}</span>


                <div class="">
                        <a class="btn btn-primary btn-md  " href="{{ route($base_route.'index') }}">
                            <i class="fas fa-list"></i> List
                        </a>
                        <a class="btn btn-success btn-md  " href="{{ route($base_route.'create') }}">
                            <i class="fas fa-pencil-alt"></i>
                            Create
                        </a>
                </div>
            </div>
                </div>
                </div>

        </div>

        <div class="row">
            <div class="col-12">


                    <table class="table table-hover">
                        <tr>
                            <th class="bg-light" style="width: 25%">Title</th>
                            <td>{{ $data->title }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Subtitle</th>
                            <td>{{ $data->subtitle }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Slug</th>
                            <td>{{ $data->slug }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Image</th>
                            <td>
                                @if ($data->image)
                                    <img src="{{ asset($img_path.$data->image) }}" alt="image" class="img-fluid" width="100">
                                @else
                                    {{ 'Image Not Found' }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Status</th>
                            <td><input type="checkbox" {{$data->status==1 ?'checked' :''}}></td>
                        </tr>

                        <tr>
                            <th class="bg-light" style="width: 25%">Long Description</th>
                            <td>{!! $data->description !!}</td>
                        </tr>

                        <tr>
                            <th class="bg-light" style="width: 25%">Seo Title</th>
                            <td>{{ $data->seo_title }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Seo Keyword</th>
                            <td>{{ $data->seo_keyword }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">SEO Description</th>
                            <td>{{ $data->seo_desc }}</td>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td>{{ $data->createdBy->name }}</td>
                        </tr>
                        <tr>
                            <th>Updated By</th>
                            <td>{{ $data->updatedBy->name?? 'Not Updated Yet' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Created At</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light" style="width: 25%">Updated At</th>
                            <td>{{ $data->updated_at }}</td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
