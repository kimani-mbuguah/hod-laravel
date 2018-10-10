@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>SERMONS <span>LIST</span></h1>
            <ul>
                <li><a href="index-2.html" title="">Home</a></li>
                <li><a href="sermons.html" title="">Sermons</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="latest-sermons remove-ext">
                            @if(count($sermons) >0 )
                            @foreach ($sermons as $sermon)
                            <div class="sermon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="image">
                                            <img src="/images/sermons_images/{{$sermon->image}}" alt="{{$sermon->image}}" />
                                            <a href="#" title=""><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3><a href="/sermons/{{$sermon->id}}" title="">{{$sermon->title}}</a></h3>
                                        <span><i class="fa fa-calendar-o"></i> {{$sermon->created_at}}</span>
                                        <p>{!! str_limit($sermon->description, $limit = 150, $end = '...') !!}</p>
                                    </div>
                                    <div class="hover-in">
                                        <ul class="sermon-media">
                                            <li><a title=""><i class="audio-btn fa fa-headphones"></i>
                                                <div class="audioplayer"><audio  src="/sermons/{{$sermon->audio}}"></audio><span class="cross">X</span></div>
                                            </a></li>
                                            <li><a target="_blank" href="#" title=""><i class="fa fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- SERMON -->
                            @endforeach   
                            {{$sermons->links()}} 
                            @else
                                <h3>No sermons to show</h3>
                            @endif
                        </div><!-- LATEST SERMONS -->
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
                    </aside><!-- SIDEBAR -->
                </div>
            </div>
        </div>
    </section>	    
@endsection