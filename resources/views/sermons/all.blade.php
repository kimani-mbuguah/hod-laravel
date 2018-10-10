@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            @if(count($sermons) >0 )
                @foreach ($sermons as $sermon)
            <div class="col-lg-4 col-md-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="media">
                            <div class="media-body">
                                <h2 class="text-white display-6">{{$sermon->title}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="twt-write col-sm-12">
                        <p>{!! str_limit($sermon->description, $limit = 100, $end = '...') !!}</p>
                    </div>
                    <footer class="twt-footer">
                        <span class="pull-left">
                            <button class="btn btn-warning"><a href="/word/{{$sermon->id}}/edit">Edit Sermon</a></button>
                        </span>
                        <span class="pull-right">
                            {!! Form::open(['action' => ['SermonsController@destroy',$sermon->id],'method' => 'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete Sermon',['class'=>'btn btn-danger'])}}
                        </span>
                    </footer>
                </section>
            </div>    
            @endforeach   
                {{$sermons->links()}} 
            @else
                <h3>No posts available</h3>
            @endif
        </div>
    </div>
</div>
@endsection