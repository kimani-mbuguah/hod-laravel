@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(/images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1><span>{{$event->title}}</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="/events" title="">Events</a></li>
                <li><a href="#" title="">{{$event->title}}</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="single-page">
                            <img src="/images/event_images/{{$event->image}}" alt="" />
                        <h2>{{$event->title}}</h2>
                            <div class="meta">
                                <ul>
                                    <li><i class="fa fa-reply"></i> Posted In <a href="#" title="">Events</a></li>
                                    <li><i class="fa fa-calendar-o"></i> {{$event->created_at}}</li>
                                    <li><i class="fa fa-user"></i> <a href="#" title="">{{$event->posted_by}}</a></li>
                                </ul>
                                <img src="/images/resource/author.jpg" alt="" />
                            </div><!-- POST META -->
                            <div class="event-info">
                                
                                <div class="col-md-12">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> {{$event->date}}</li>
                                        <li><i class="fa fa-map-marker"></i> {{$event->location}}</li>
                                        <li><i class="fa fa-clock-o"></i> {{$event->start_time}} - {{$event->end_time}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- SERMON SINGLE -->
                        <p>{!!$event->description!!}</p>
                        <blockquote>
                        <div class="share-this">
                            <h5><i class="fa fa-share"></i> SHARE THIS EVENT</h5>
                            <ul class="social-media">
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                            </ul>				
                        </div><!-- SHARE THIS -->
                    </div>
                    <aside class="col-md-4 sidebar column">
                       
                        <div class="widget">
                            <div class="widget-title"><h4>ARCHIVES</h4></div>
                            <ul>
                                <li><a href="/posts" title=""><i class="fa fa-hand-o-right"></i>April 2018 <span>(07)</span></a></li>
                                <li><a href="/posts" title=""><i class="fa fa-hand-o-right"></i>May 2018 <span>(12)</span></a></li>
                                <li><a href="/posts" title=""><i class="fa fa-hand-o-right"></i>January 2018 <span>(54)</span></a></li>
                                <li><a href="/posts" title=""><i class="fa fa-hand-o-right"></i>July 2018 <span>(85)</span></a></li>
                                <li><a href="/posts" title=""><i class="fa fa-hand-o-right"></i>April 2018 <span>(42)</span></a></li>
                            </ul>
                        </div><!-- ARCHIVES -->
                        
                        <div class="widget">
                            <div class="widget-title"><h4>NEWSLETTER SIGNUP</h4></div>
                            <form>
                                <input type="email" placeholder="Enter Your Email Address" />
                                <input type="submit" value="SIGN UP NOW" />
                            </form>
                        </div><!-- NEWSLETTER SIGNUP -->					
                    </aside><!-- SIDEBAR -->
                </div>
            </div>
        </div>
    </section>	    
@endsection