@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>SINGLE<span> POST</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="/posts" title="">Blog</a></li>
                <li><a href="#" title="">{{$post->title}}</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="single-page">
                            <img src="/images/blog_images/{{$post->image}}" alt="{{$post->title}}" />
                            <h2>{{$post->title}}</h2>
                            <div class="meta">
                                <ul>
                                    <li><i class="fa fa-reply"></i> Posted In <a href="#" title="">Blog</a></li>
                                    <li><i class="fa fa-calendar-o"></i> {{$post->created_at}}</li>
                                    <li><i class="fa fa-user"></i> <a href="#" title="">{{$post->created_by}}</a></li>
                                </ul>
                                <img src="images/resource/author.jpg" alt="" />
                            </div><!-- POST META -->
                        </div><!-- SERMON SINGLE -->
                        <p>{!!$post->body!!} </p>
                        <div class="share-this">
                            <h5><i class="fa fa-share"></i> SHARE THIS BLOG POST</h5>
                            <ul class="social-media">
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            </ul>				
                        </div><!-- SHARE THIS -->
                        <div class="comments">
                            <h4>COMMENTS</h4>
                            <ul>
                                <li>
                                    @if(count($comments) > 0 )
                                        @foreach ($comments as $comment)
                                            <div class="comment">
                                                <div class="avatar"><img src="/images/resource/comment1.jpg" alt="" /><a href="#" title="">REPLY</a></div>
                                                <h5>{!!$comment->name!!}
                                                <i><span>{!!$comment->created_at!!}</span></i></h5>
                                                <p>{!!$comment->comment!!}</p>
                                            </div><!-- COMMENT --><br>
                                        @endforeach   
                                    @endif							
                                </li>
                            </ul>
                        </div><!-- COMMENTS -->										
                        <div class="leave-comment">
                            <h4><i class="fa fa-edit"></i> LEAVE A COMMENT</h4>
                            <p>Your email address will not be published.</p>
                            @include('inc.messages')
                            {!! Form::open(['action' => 'PostCommentsController@store','method' => 'POST']) !!}
                                {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Your Name'])}}
                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Your Email'])}}
                                {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder'=>'Comment','rows'=>'3'])}}
                                {{Form::submit('Comment',['class'=>'btn btn-outline-primary btn-lg btn-block'])}}
                                {{Form::hidden('post_id', $post->id)}}
                            {!! Form::close() !!}
                        </div><!-- COMMENT FORM -->	
                    </div>
                    <aside class="col-md-4 sidebar column">
                        <div class="widget">
                            <form class="search-form">
                                <input type="text" placeholder="START SEARCHING" />
                                <input type="submit" value="" />
                            </form>
                        </div><!-- SEARCH FORM -->
                        <div class="widget">
                            <div class="widget-title"><h4>UPCOMING EVENT</h4></div>					
                            <div class="event-count">
                                <div class="event-img">
                                    <img src="/images/event_images/{{$event['image']}}" alt="" />
                                    <div class="downcount">
                                        <i class="fa fa-clock-o"></i>
                                        <ul class="countdown">
                                            <li> <span class="days">Date</span>
                                            <p class="days_ref">{{$event['date']}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="event-single.html" title="">{{$event['title']}}</a></h4>
                            </div>
                        </div><!-- UPCOMING EVENT -->					
                        <div class="widget">
                            <div class="widget-title"><h4>RECENT SERMON</h4></div>
                            <div class="sermon-widget">
                                <div class="sermon-img">
                                    <img src="/images/sermons_images/{{$latestSermon['image']}}" alt="" />
                                <span><i class="fa fa-calendar-o"></i> {{$latestSermon['created_at']}}</span>
                                    <h3><a href="#" title="">{{$latestSermon['title']}}</a></h3>
                                </div>
                                <div class="sermon-detail">
                                <p>{!! str_limit($latestSermon['description'], $limit = 300, $end = '...') !!}</p>
                                    <ul class="sermon-media">
                                        <li><a title=""><i class="audio-btn fa fa-headphones"></i>
                                            <div class="audioplayer"><audio  src="/sermons/{{$latestSermon['audio']}}"></audio><span class="cross">X</span></div>
                                        </a></li>
                                        <li><a target="_blank" href="/sermons/{{$latestSermon['audio']}}" title=""><i class="fa fa-download"></i></a></li>
                                    </ul>									
                                </div>
                            </div>
                        </div><!-- RECENT SERMON -->
                    </aside><!-- SIDEBAR -->
                </div>
            </div>
        </div>
    </section>	    
@endsection