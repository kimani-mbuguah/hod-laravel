@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            @if(count($devotions) >0 )
                @foreach ($devotions as $devotion)
            <div class="col-lg-4 col-md-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="media">
                            <div class="media-body">
                                <h2 class="text-white display-6">{{$devotion->title}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="twt-write col-sm-12">
                        <p>{!! str_limit($devotion->description, $limit = 100, $end = '...') !!}</p>
                    </div>
                    <footer class="twt-footer">
                        <span class="pull-left">
                            <button class="btn btn-warning"><a href="/dashboard/devotions/{{$devotion->id}}/edit">Edit Devotion</a></button>
                        </span>
                        <span class="pull-right">
                            {!! Form::open(['action' => ['DevotionsController@destroy',$devotion->id],'method' => 'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete Devotion',['class'=>'btn btn-danger'])}}
                        </span>
                    </footer>
                </section>
            </div>    
            @endforeach   
                {{$devotions->links()}} 
            @else
                <p class="red">Nothing to show</p>
            @endif
        </div>
    </div>
</div>
@endsection