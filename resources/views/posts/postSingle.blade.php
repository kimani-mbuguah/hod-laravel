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
                            <img src="/images/resource/sermon-single.jpg" alt="" />
                            <h2>{{$post->title}}</h2>
                            <div class="meta">
                                <ul>
                                    <li><i class="fa fa-reply"></i> Posted In <a href="#" title="">Sermons</a></li>
                                    <li><i class="fa fa-calendar-o"></i> {{$post->created_at}}</li>
                                    <li><i class="fa fa-user"></i> <a href="#" title="">{{$post->created_by}}</a></li>
                                </ul>
                                <img src="images/resource/author.jpg" alt="" />
                            </div><!-- POST META -->
                        </div><!-- SERMON SINGLE -->
                        <p>{!!$post->body!!} </p>
                        <div class="share-this">
                            <h5><i class="fa fa-share"></i> SHARE THIS SERMON</h5>
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
                                    <div class="comment">
                                        <div class="avatar"><img src="/images/resource/comment1.jpg" alt="" /><a href="#" title="">REPLY</a></div>
                                        <h5>Thoms Gomz Britian
                                        <i><span>September</span> 24, 2013 at <span>1:05 pm</span></i></h5>
                                        <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                    </div><!-- COMMENT -->	
                                    <ul>
                                        <li>
                                            <div class="comment">
                                                <div class="avatar"><img src="/images/resource/comment2.jpg" alt="" /><a href="#" title="">REPLY</a></div>
                                                <h5>Thoms Gomz Britian
                                                <i><span>September</span> 24, 2013 at <span>1:05 pm</span></i></h5>
                                                <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis .</p>
                                            </div><!-- COMMENT -->
                                        </li>
                                    </ul>								
                                </li>
                                <li>
                                    <div class="comment">
                                        <div class="avatar"><img src="/images/resource/comment3.jpg" alt="" /><a href="#" title="">REPLY</a></div>
                                        <h5>Thoms Gomz Britian
                                        <i><span>September</span> 24, 2013 at <span>1:05 pm</span></i></h5>
                                        <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                    </div><!-- COMMENT -->
                                </li>
                            </ul>
                        </div><!-- COMMENTS -->										
                        <div class="leave-comment">
                            <h4><i class="fa fa-edit"></i> LEAVE A COMMENT</h4>
                            <p>Your email address will not be published.</p>
                            <form>
                                <input type="text" placeholder="Name" />
                                <input type="email" placeholder="Email" />
                                <textarea placeholder="Description"></textarea>
                                <input type="submit" value="Comment" />
                            </form>
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
                            <div class="widget-title"><h4>LATEST EVENT</h4></div>
                            <div class="animal-event simple">
                                <div class="animal-detail">
                                    <h4><a href="#" title="">Offers And General Visual</a></h4>
                                    <div class="animal-img"><img src="/images/resource/animal-event1.jpg" alt="" /><span><strong>12</strong>Dec 2014</span></div>
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