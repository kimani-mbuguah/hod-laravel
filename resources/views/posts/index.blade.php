@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>BLOG <span>PAGE</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="#" title="">Blog List</a></li>
            </ul>
        </div>
    </div>
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="remove-ext">
                            @if(count($posts) >0 )
                            @foreach ($posts as $post)
                                <div class="blog-post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="image">
                                                <img src="/images/blog_images/{{$post->image}}" alt="" />
                                                <a href="/posts/{{$post->id}}" title=""><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="blog-detail">
                                                <h3><a href="/posts/{{$post->id}}" title="{{$post->title}}">{{$post->title}}</a></h3>
                                                <p> {!! str_limit($post->body, $limit = 320, $end = '...') !!}</p>
                                                <span><i class="fa fa-calendar-o"></i> {{$post->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- BLOG POST -->
                                @endforeach   
                                    {{$posts->links()}} 
                                @else
                                    <h3>No posts available</h3>
                                @endif
                        </div>
                    </div>
                    <aside class="col-md-4 sidebar column">
                        <div class="widget">
                            <div class="widget-title"><h4>POPULAR POSTS</h4></div>
                            <div class="remove-ext">
                                <div class="widget-blog">
                                    <div class="widget-blog-img"><img src="images/resource/widget-blog.jpg" alt="" /></div>
                                    <p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>
                                    <span><i class="fa fa-calendar-o"></i> November 01, 2013</span>
                                </div><!-- WIDGET BLOG -->
                                <div class="widget-blog">
                                    <div class="widget-blog-img"><img src="images/resource/widget-blog2.jpg" alt="" /></div>
                                    <p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>
                                    <span><i class="fa fa-calendar-o"></i> November 01, 2013</span>
                                </div><!-- WIDGET BLOG -->
                                <div class="widget-blog">
                                    <div class="widget-blog-img"><img src="images/resource/widget-blog3.jpg" alt="" /></div>
                                    <p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>
                                    <span><i class="fa fa-calendar-o"></i> November 01, 2013</span>
                                </div><!-- WIDGET BLOG -->
                            </div>						
                        </div><!-- POPULAR POSTS -->
                        <div class="widget">
                            <div class="widget-title"><h4>UPCOMING EVENT</h4></div>					
                            <div class="event-count">
                                <div class="event-img">
                                    <img src="images/resource/event1.jpg" alt="" />
                                    <div class="downcount">
                                        <i class="fa fa-clock-o"></i>
                                        <ul class="countdown">
                                            <li> <span class="days">00</span>
                                            <p class="days_ref">DAYS</p>
                                            </li>
                                            <li> <span class="hours">00</span>
                                            <p class="hours_ref">HOURS</p>
                                            </li>
                                            <li> <span class="minutes">00</span>
                                            <p class="minutes_ref">MINTS</p>
                                            </li>
                                            <li> <span class="seconds">00</span>
                                            <p class="seconds_ref">SECS</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="event-single.html" title="">Offer and General Visuals</a></h4>
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