@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>CONTACT <span>US</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="#" title="">Contact Us</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d857.5245508557185!2d37.28834327863833!3d-0.5117113152633762!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e1!3m2!1sen!2ske!4v1539544797877" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div><!--- GOOGLE MAP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="block remove-gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title2">
                            <span>The House Of Destiny Church</span>
                            <h2>LET'S <span>GET IN TOUCH</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 column">
                                <h4>CONTACT INFORMATION</h4>
                                <div class="space"></div>
                                <p>There are many ways for you to connect with us by contacting our ministry. Reach out to us by phone, email or through social media and let us know how we can help.</p>
                                <div class="space"></div>
                                <p>
                                    To contact The House of Destiny Church by email, fill out the form below with your question or comment and submit. Your email will be forwarded to the appropriate department for a response. Thank you for contacting us!
                                </p>
                                <div class="space"></div>
                                <ul class="social-media">
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div><!--- CONTACT INFORMATION -->
                            <div class="col-md-6 column">
                                <h4>FILL IN THE FORM BELOW</h4>
                                <div class="space"></div>
                                <div id="message"></div>
                                @include('inc.messages')
                                {!! Form::open(['action' => 'MessagesController@store','method' => 'POST','class'=>'theme-form']) !!}
                                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Your Name'])}}
                                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Your Email'])}}
                                    {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'Message','rows'=>'3'])}}
                                    {{Form::submit('Send',['class'=>'submit'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>	
    <section>
        <div class="block remove-gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-info">
                            <div class="col-md-3">
                                <div class="info-block">
                                    <i class="fa fa-home"></i>
                                    <p>Kerugoya-Kutus Road</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-block">
                                    <i class="fa fa-info"></i>
                                    <p>www.houseofdestinykerugoya.org</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-block">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>hello@houseofdestinykerugoya.org</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-block">
                                    <i class="fa fa-mobile"></i>
                                    <p>+254 705 000 050</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--- CONTACT INFORMATION -->

@endsection