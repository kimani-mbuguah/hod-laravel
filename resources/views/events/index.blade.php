@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>EVENTS <span>LISTING</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="#" title="">House of Destiny Church Events</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="events-gridview remove-ext">  
                            <div class="row">
                                @if(count($events) >0 )
                                    @foreach ($events as $event)
                                    <div class="col-md-6">
                                        <div class="category-box">
                                            <div class="category-block">
                                                <div class="category-img">
                                                        <img src="/images/event_images/{{$event->image}}" alt="" />
                                                    <ul>
                                                        <li class="date"><a href="/events/{{$event->id}}" title=""><i class="fa fa-calendar-o"></i> {{$event->date}}</a></li>
                                                        <li class="time"><a href="/events/{{$event->id}}" title=""><i class="fa fa-clock-o"></i> {{$event->start_time}}</a></li>
                                                    </ul>
                                                </div>
                                            <h3><a href="/events/{{$event->id}}" title="{{$event->title}}">{{$event->title}}</a></h3>
                                                <span><i class="fa fa-map-marker"></i> {{$event->location}}</span>
                                            </div>						
                                        </div><!-- EVENTS -->
                                    </div>
                                    @endforeach   
                                    {{$events->links()}} 
                                @else
                                    <h3>No posts available</h3>
                                @endif
                            </div>
                        </div><!-- EVENTS GRID VIEW -->
                    </div>
                    <aside class="col-md-4 sidebar column">
                        <div class="widget">
                            <form class="search-form">
                                <input type="text" placeholder="Search Event" />
                                <input type="submit" value="" />
                            </form>
                        </div><!-- SEARCH FORM -->
                        <div class="widget">
                            <div class="widget-title"><h4>RECENT BLOG</h4></div>
                            <div class="remove-ext">
                                <div class="widget-blog">
                                    <div class="widget-blog-img"><img src="images/resource/widget-blog.jpg" alt="" /></div>
                                    <p><a href="blog-single.html" title="">House of Destiny</a></p>
                                    <span><i class="fa fa-calendar-o"></i> November 01, 2018</span>
                                </div><!-- WIDGET BLOG -->
                                <div class="widget-blog">
                                    <div class="widget-blog-img"><img src="images/resource/widget-blog2.jpg" alt="" /></div>
                                    <p><a href="blog-single.html" title="">House of Destiny</a></p>
                                    <span><i class="fa fa-calendar-o"></i> November 01, 2018</span>
                                </div><!-- WIDGET BLOG -->
                            </div>						
                        </div><!-- RECENT BLOG -->
                        <div class="widget">
                            <div class="widget-title"><h4>LATEST EVENT</h4></div>
                            <div class="animal-event simple">
                                <div class="animal-detail">
                                    <h4><a href="#" title="">Youth Connect</a></h4>
                                    <div class="animal-img"><img src="images/resource/animal-event1.jpg" alt="" /><span><strong>12</strong>Dec 2018</span></div>
                                    <ul>
                                        <li><a href="#" title=""><i class="fa fa-map-marker"></i></a> <span>The House of Destiny Kerugoya</span></li>
                                        <li><a href="#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
                                        <li><a href="#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2018 10:48 am</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- LATEST EVENT -->
                    </aside><!-- SIDEBAR -->
                </div>
            </div>
        </div>
    </section>   
@endsection