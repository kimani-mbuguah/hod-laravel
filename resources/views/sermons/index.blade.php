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
                                            <li><a target="_blank" href="sermons/{{$sermon->audio}}" title=""><i class="fa fa-download"></i></a></li>
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
                                @if(count($footerPosts) >0 )
                                    @foreach ($footerPosts as $footerPost)
                                        <div class="widget-blog">
                                            <div class="widget-blog-img"><img src="/images/blog_images/{{$footerPost->image}}" alt="" /></div>
                                            <h6><a href="/posts" title=""> {{$footerPost->title}}</a></h6>
                                            <p>{!! str_limit($footerPost->body, $limit = 200, $end = '...') !!}</p>
                                            <span><i class="fa fa-calendar-o"></i> {{$footerPost->created_at}}</span>
                                        </div><!-- WIDGET BLOG -->
                                    @endforeach   
                                @endif
                            </div>						
                        </div><!-- POPULAR POSTS -->
                        <div class="widget">
                                <div class="widget-title"><h4>LATEST EVENT</h4></div>
                                <div class="animal-event simple">
                                    <div class="animal-detail">
                                        <h4><a href="#" title="">{{$showEvent['title']}}</a></h4>
                                        <div class="animal-img"><img src="/images/event_images/{{$showEvent['image']}}" alt="" /><span><strong><i class="fa fa-calendar"></i></strong>{{$showEvent['date']}}</span></div>
                                        <ul>
                                            <li><a href="#" title=""><i class="fa fa-map-marker"></i></a> <span>{{$showEvent['location']}}</span></li>
                                            <li><a href="#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
                                            <li><a href="#" title=""><i class="fa fa-clock-o"></i></a><span>{{$showEvent['start_time']}}</span></li>
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