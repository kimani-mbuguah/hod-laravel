@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            @if(count($posts) >0 )
                @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="media">
                            <div class="media-body">
                                <h2 class="text-white display-6">{{$post->title}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="twt-write col-sm-12">
                        <p>{!! str_limit($post->body, $limit = 100, $end = '...') !!}</p>
                    </div>
                    <footer class="twt-footer">
                        <span class="pull-left">
                            <button class="btn btn-warning"><a href="/posts/{{$post->id}}/edit">Edit Post</a></button>
                        </span>
                        <span class="pull-right">
                            {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete Post',['class'=>'btn btn-danger'])}}
                        </span>
                    </footer>
                </section>
            </div>    
            @endforeach   
                {{$posts->links()}} 
            @else
                <h3>No posts available</h3>
            @endif
        </div>
    </div>
</div>
@endsection