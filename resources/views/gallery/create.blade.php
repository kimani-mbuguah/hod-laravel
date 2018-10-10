@extends('layouts.admin')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li class="active">Add Image</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">

            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Upload New Image</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['action' => 'GalleryController@store','files' => true,'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('new image', 'New Image', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {{Form::file('image')}}
                                </div>
                                <small class="form-text text-muted">ex. hod.jpg</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('image description', 'Image Description', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-group"></i></div>
                                    {{Form::textarea('description', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder'=>'Image Description'])}}
                                </div>
                                <small class="form-text text-muted">ex. Youth Connect</small>
                            </div>
                            <div class="fom-group">
                                {{Form::submit('Upload Image',['class'=>'btn btn-outline-primary btn-lg btn-block'])}}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->   
@endsection