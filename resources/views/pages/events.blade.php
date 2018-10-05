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
                                                        <img src="images/resource/event1.jpg" alt="" />
                                                    <ul>
                                                        <li class="date"><a href="event-single.html" title=""><i class="fa fa-calendar-o"></i> {{$event->created_at}}</a></li>
                                                        <li class="time"><a href="event-single.html" title=""><i class="fa fa-clock-o"></i> {{$event->start_time}}</a></li>
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
                                <input type="text" placeholder="START SEARCHING" />
                                <input type="submit" value="" />
                            </form>
                        </div><!-- SEARCH FORM -->
                        <div class="widget">
                            <div class="widget-title"><h4>TAG CLOUD</h4></div>
                            <div class="tagclouds">
                                <a href="blog.html" title="">Aenen</a>
                                <a href="blog.html" title="">Suspendise</a>
                                <a href="blog.html" title="">Citrous</a>
                                <a href="blog.html" title="">Valitsantego</a>
                                <a href="blog.html" title="">Pellntesious</a>
                                <a href="blog.html" title="">Vestibu</a>
                                <a href="blog.html" title="">Aenen</a>
                                <a href="blog.html" title="">Suspendise</a>
                                <a href="blog.html" title="">Citrous</a>
                            </div>
                        </div><!-- TAG CLOUD -->
                        <div class="widget">
                            <div class="widget-title"><h4>RECENT BLOG</h4></div>
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
                            </div>						
                        </div><!-- RECENT BLOG -->
                        <div class="widget">
                            <div class="widget-title"><h4>VIDEO</h4></div>
                            <div class="video">
                                <div class="video-img lightbox">
                                    <img src="images/resource/video.jpg" alt="" />
                                    <a href="http://vimeo.com/44867610"  data-poptrox="vimeo" title=""><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div><!-- VIDEO -->
                        <div class="widget">
                            <div class="widget-title"><h4>META</h4></div>
                            <ul>
                                <li><a href="blog.html" title=""><i class="fa fa-hand-o-right"></i>Log in</a></li>
                                <li><a href="blog.html" title=""><i class="fa fa-hand-o-right"></i>Entries RSS</a></li>
                                <li><a href="blog.html" title=""><i class="fa fa-hand-o-right"></i>Comments RSS</a></li>
                                <li><a href="blog.html" title=""><i class="fa fa-hand-o-right"></i>Wordpress.org</a></li>
                            </ul>
                        </div><!-- META -->
                        <div class="widget">
                            <div class="widget-title"><h4>LATEST EVENT</h4></div>
                            <div class="animal-event simple">
                                <div class="animal-detail">
                                    <h4><a href="#" title="">Offers And General Visual</a></h4>
                                    <div class="animal-img"><img src="images/resource/animal-event1.jpg" alt="" /><span><strong>12</strong>Dec 2014</span></div>
                                    <ul>
                                        <li><a href="#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
                                        <li><a href="#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
                                        <li><a href="#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
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