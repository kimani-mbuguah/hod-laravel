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
                    <form method="POST" action="{{ action('EventsController@store')}}">
                        <div class="form-group">
                            <label class=" form-control-label">Event Name</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-group"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. Youth Connect</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Event Date</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 25 Dec, 2018</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Event Starting Time</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. 8:00 A.M</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Event Location</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-compass"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">ex. House of Destiny Church</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Event Description</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <small class="form-text text-muted">ex. Give details about this event</small>
                        </div>
                        <div class="fom-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Create Event</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->   
@endsection