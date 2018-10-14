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
                            <iframe src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=uk&amp;aq=&amp;sll=18.312811,-4.306641&amp;sspn=46.292419,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=52.352119,-2.647705&amp;spn=0.685471,1.352692&amp;t=p&amp;z=10&amp;output=embed"></iframe>	
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
                                <form class="theme-form" method="post" action="https://html.webinane.com/deeds/contact.php" name="contactform" id="contactform">
                                    <input name="name" class="half-field form-control" type="text" id="name"  placeholder="Name" />
                                    <input name="email" class="half-field form-control" type="text" id="email" placeholder="Email" />
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Description" ></textarea>
                                    <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
                                    <input class="submit" type="submit"  id="submit" value="SUBMIT" />
                                </form><!--- FORM -->
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