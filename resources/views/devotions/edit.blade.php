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
                    <li><a href="#">Devotions</a></li>
                    <li class="active">Edit Devotion</li>
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
                        <strong>Edit Devotion</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['action' => ['DevotionsController@update',$devotion->id],'files' => true,'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('devotion title', 'Devotion Title', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-group"></i></div>
                                    {{Form::text('title', $devotion->title, ['class' => 'form-control', 'placeholder'=>'Devotion Title'])}}
                                </div>
                                <small class="form-text text-muted">ex. Youth Connect</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('devotion image', 'Devotion Image', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {{Form::file('devotion_image')}}
                                </div>
                                <small class="form-text text-muted">ex. hod.jpg</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('devotion description', 'Devotion Description', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                    {{Form::textarea('description', $devotion->description, ['id' => 'article-ckeditor','class' => 'form-control'])}}
                                </div>
                                <small class="form-text text-muted">ex. House of Destiny Church</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('devotion audio file', 'Devotion Audio File', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {{Form::file('audio')}}
                                </div>
                                <small class="form-text text-muted">ex. hod.mp3</small>
                            </div>
                            <div class="fom-group">
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Edit Devotion',['class'=>'btn btn-outline-primary btn-lg btn-block'])}}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->   
@endsection