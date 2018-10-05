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
                    <li><a href="#">Events</a></li>
                    <li class="active">Add Event</li>
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
                        <strong>Create a new event</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['action' => 'EventsController@store','method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('event name', 'Event Name', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-group"></i></div>
                                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Event Title'])}}
                                </div>
                                <small class="form-text text-muted">ex. Youth Connect</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event image', 'Event Image', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {{Form::file('image')}}
                                </div>
                                <small class="form-text text-muted">ex. Youth Connect</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event date', 'Event Date', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    {{Form::text('date', '', ['class' => 'form-control', 'placeholder'=>'Event Date'])}}
                                </div>
                                <small class="form-text text-muted">ex. 25 Dec, 2018</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event starting time', 'Event Starting Time', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    {{Form::text('start_time', '', ['class' => 'form-control', 'placeholder'=>'Event Starting Time'])}}
                                </div>
                                <small class="form-text text-muted">ex. 8:00 A.M</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event ending time', 'Event Ending Time', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    {{Form::text('end_time', '', ['class' => 'form-control', 'placeholder'=>'Event Ending Time'])}}
                                </div>
                                <small class="form-text text-muted">ex. 8:00 P.M</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event location', 'Event Location', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-compass"></i></div>
                                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder'=>'Event Location'])}}
                                </div>
                                <small class="form-text text-muted">ex. House of Destiny Church</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('event description', 'Event Description', ['class' => 'form-control-label'])}}
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                    {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder'=>'Event Description','rows'=>'6'])}}
                                </div>
                                <small class="form-text text-muted">ex. House of Destiny Church</small>
                            </div>
                            <div class="fom-group">
                                {{Form::submit('Create Event',['class'=>'btn btn-outline-primary btn-lg btn-block'])}}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->   
@endsection