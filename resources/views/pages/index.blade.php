@extends('layouts.web')
@section('content')
<div class="slider">
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @if(count($sliderones) >0 )
                    @foreach ($sliderones as $sliderone)
                        <li data-transition="zoomout" data-slotamount="10" data-masterspeed="3000">
                            <img src="/images/slider/{{$sliderone->bg_image}}" alt="slidebg1" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                            <div class="tp-caption slide-title1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['150','150','150','150']" data-voffset="['0','0','0','0']" data-fontsize="['49','49','29','19']" data-lineheight="['49','49','29','19']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:90;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;"><span>{{$sliderone->text_one}}</span></div>
                            <div class="tp-caption slide-subtitle1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['220','220','220','220']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['18','18','15','15']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:45;rZ:30;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$sliderone->text_two}}</div>
                            <a href="/about" title="" class="tp-caption slide-button colored-box tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['280','280','280','280']" data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="y:bottom(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$sliderone->text_three}}</a>
                        </li>
                    @endforeach   
                @else
                <li data-transition="zoomout" data-slotamount="10" data-masterspeed="3000">
                    <img src="/images/resource/feature-caro-1.jpg" alt="slidebg1" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                    <div class="tp-caption slide-title1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['150','150','150','150']" data-voffset="['0','0','0','0']" data-fontsize="['49','49','29','19']" data-lineheight="['49','49','29','19']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:90;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">The House of<span>Destiny Church</span></div>
                    <div class="tp-caption slide-subtitle1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['220','220','220','220']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['18','18','15','15']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:45;rZ:30;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Step By Step Towards Our DESTINY In Christ</div>
                    <a href="/about" title="" class="tp-caption slide-button colored-box tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['280','280','280','280']" data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="y:bottom(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Learn More</a>
                </li>
                @endif

                @if(count($slidertwos) >0 )
                    @foreach ($slidertwos as $slidertwo)
                        <li data-transition="zoomin" data-slotamount="10" data-masterspeed="3000">
                            <img src="/images/slider/{{$slidertwo->bg_image}}" alt="slidebg2" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                            <div class="tp-caption slide-title2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['100','100','100','100']" data-voffset="['0','0','0','0']" data-fontsize="['37','37','27','27']" data-lineheight="['37','37','27','27']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:1.5;sY:0.9;skX:0.9;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$slidertwo->text_one}}</span></div>
                            <div class="tp-caption colored-box slide-subtitle2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['170','170','170','170']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['25','25','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap; color: #ffffff;">{{$slidertwo->text_two}}</div>
                            <div class="tp-caption white-bg slide-subtitle2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['220','220','220','220']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['25','25','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$slidertwo->text_three}}</div>
                            <a href="#" title="" class="tp-caption dark-bg slide-button slide-button2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['300','300','300','300']" data-voffset="['0','0','0','0']" data-fontsize="['14','14','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:-45;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Save A Seat</a>
                        </li>
                    @endforeach   
                @else
                <li data-transition="zoomin" data-slotamount="10" data-masterspeed="3000">
                    <img src="/images/resource/feature-caro-3.jpg" alt="slidebg2" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                    <div class="tp-caption slide-title2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['100','100','100','100']" data-voffset="['0','0','0','0']" data-fontsize="['37','37','27','27']" data-lineheight="['37','37','27','27']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:1.5;sY:0.9;skX:0.9;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Visit Us In <span>Kerugoya, Kenya</span></div>
                    <div class="tp-caption colored-box slide-subtitle2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['170','170','170','170']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['25','25','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap; color: #ffffff;">Kutus-Kerugoya Road</div>
                    <div class="tp-caption white-bg slide-subtitle2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['220','220','220','220']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']" data-lineheight="['25','25','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Next To Facing Mount Kenya Boys' High School</div>
                    <a href="#" title="" class="tp-caption dark-bg slide-button slide-button2 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['300','300','300','300']" data-voffset="['0','0','0','0']" data-fontsize="['14','14','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:-45;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Save A Seat</a>
                </li>
                @endif

                @if(count($sliderthrees) >0 )
                    @foreach ($sliderthrees as $sliderthree)
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="3000">
                            <img src="/images/slider/{{$sliderthree->bg_image}}" alt="slidebg3" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                            <div class="tp-caption slide-title3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['100','100','100','100']" data-voffset="['0','0','0','0']" data-fontsize="['36','36','26','26']" data-lineheight="['36','36','26','26']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1700" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="white-space: nowrap;">{{$sliderthree->text_one}}</div>
                            <div class="tp-caption light-bg slide-subtitle3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['170','170','170','170']" data-voffset="['0','0','0','0']" data-fontsize="['26','26','20','20']" data-lineheight="['26','26','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$sliderthree->text_two}}</div>
                            <div class="tp-caption light-bg slide-subtitle3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['213','213','213','213']" data-voffset="['0','0','0','0']" data-fontsize="['26','26','20','20']" data-lineheight="['26','26','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{{$sliderthree->text_three}}</div>
                            <a href="#" title="" class="tp-caption dark-bg slide-button slide-button2 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['300','300','300','300']" data-voffset="['0','0','0','0']" data-fontsize="['14','14','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:-45;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Save A Seat</a>
                        </li>
                    @endforeach   
                @else
                <li data-transition="fade" data-slotamount="10" data-masterspeed="3000">
                    <img src="/images/resource/slide12.jpg" alt="slidebg3" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina />
                    <div class="tp-caption slide-title3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['100','100','100','100']" data-voffset="['0','0','0','0']" data-fontsize="['36','36','26','26']" data-lineheight="['36','36','26','26']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1700" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="white-space: nowrap;">Youth Connect</div>
                    <div class="tp-caption light-bg slide-subtitle3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['170','170','170','170']" data-voffset="['0','0','0','0']" data-fontsize="['26','26','20','20']" data-lineheight="['26','26','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Every Thursday From 6:30 Pm To 7:30 PM</div>
                    <div class="tp-caption light-bg slide-subtitle3 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['213','213','213','213']" data-voffset="['0','0','0','0']" data-fontsize="['26','26','20','20']" data-lineheight="['26','26','20','20']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Come And Learn From The Best</div>
                    <a href="#" title="" class="tp-caption dark-bg slide-button slide-button2 tp-resizeme rs-parallaxlevel-2" data-x="['500','500','500','500']" data-hoffset="['0','0','0','0']" data-y="['300','300','300','300']" data-voffset="['0','0','0','0']" data-fontsize="['14','14','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:-45;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;" data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">Save A Seat</a>
                </li>
                @endif
            </ul>
        </div>
    </div><!-- REVOLUTION SLIDER -->
</div>
<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="title2">
                    <span>About Us</span>
                    <h2>Get To Know <span>Who We Are</span></h2>
                </div>
                <div class="about">
                    <div class="col-md-6 column">
                        <h4><i class="fa fa-bank"></i>The House Of Destiny Church - Kerugoya</h4>
                        <p>
                            The House Of Destiny Church is a lively, growing congregation that has been serving in Kerugoya, Kenya for four years now. We worship every Sunday from 10:00 A.M in our sanctuary in Kerugoya Town next to Facing Mt. Kenya Boys' School. We welcome all to come, visit, worship and see what The House Of Destiny Church is all about. You are invited to become part of our Church community...
                        </p>
                        <br>
                        <a class="button" href="/about" title="">Learn More</a>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="col-md-4 active"><a data-toggle="tab" href="#image1"><img src="images/resource/about2.jpg" alt="" /></a></li>
                            <li class="col-md-4"><a data-toggle="tab" href="#image2"><img src="images/resource/about2.jpg" alt="" /></a></li>
                            <li class="col-md-4"><a data-toggle="tab" href="#image3"><img src="images/resource/about2.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 column">
                        <div class="tab-content" id="myTabContent">
                            <div id="image1" class="tab-pane fade in active">
                                <img src="images/resource/about2-big.jpg" alt="" />
                            </div>
                            <div id="image2" class="tab-pane fade">
                                <img src="images/resource/about2-big.jpg" alt="" />
                            </div>
                            <div id="image3" class="tab-pane fade">
                                <img src="images/resource/about2-big.jpg" alt="" />
                            </div>
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
                    <div class="donation-box">
                        <div class="needed-amount">
                            <span><i>$</i> <i>6</i><i>5</i><i>2</i><i>4</i></span>
                            <i>NEEDED DONATION</i>
                        </div>	
                        <div class="col-md-6">
                            <h3>GIVE US DONATION</h3>
                            <p>The House of Destiny Church is in need of funds</p>
                        </div>
                        <div class="col-md-6">
                            <a data-toggle="modal" data-target="#myModal" title="">DONATE NOW</a>
                        </div>
                        <div class="needed-amount collected-amt">
                            <span><i>$</i> <i>6</i><i>5</i><i>2</i><i>4</i></span>
                            <i>COLLECTED DONATION</i>
                        </div>						
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="donation-popup">
                                <div class="popup-title">
                                    <h5>Make A Donation</h5>
                                    <p>The House of Destiny Church is raising funds for such and such</p>
                                    <div class="needed-amount">
                                        <span><i>$</i> <i>6</i><i>5</i><i>2</i><i>4</i></span>
                                        <i>NEEDED DONATION</i>
                                    </div>
                                </div>
                                <div class="popup-content">
                                    <div class="collected">
                                        <div class="percentage">
                                            <span>Collected Donation</span>
                                        </div>
                                        <div class="collected-amount">
                                            <span><i>$</i> <i>4</i><i>5</i><i>2</i><i>9</i><i>4</i></span>
                                        </div>
                                    </div>
                                    <div class="amount-selection">
                                        <p>I would like to make a donation in the amount of:</p>
                                        <div class="row"> 
                                            <div class="col-sm-3"><input  onclick="document.getElementById('textfield').value='$500';" type="radio" value="500" name="choice1" /><label>$ 500</label></div>
                                            <div class="col-sm-3"><input  onclick="document.getElementById('textfield').value='$1000';" type="radio" value="1000" name="choice1" /><label>$ 1000</label></div>
                                            <div class="col-sm-3"><input onclick="document.getElementById('textfield').value='$1500';" type="radio" value="1500" name="choice1" /><label>$ 1500</label></div>
                                            <div class="col-sm-3"><input onclick="document.getElementById('textfield').value='$2000';" type="radio" value="2000" name="choice1" /><label>$ 2000</label></div>
                                            <div class="selections">
                                                <div class="col-md-6">
                                                    <input type="text" id="textfield" value="ENTER YOUR AMOUNT PLEASE">
                                                </div>
                                                <div class="col-md-6">
                                                    <select id="donate">
                                                        <option value="state1">Once</option>
                                                        <option value="state2">Weekly</option>
                                                        <option value="state3">Monthly</option>
                                                        <option value="state4">Quaterly</option>
                                                        <option value="state5">Half Yearly</option>
                                                        <option value="state6">Yearly</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" title="">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- donation box -->
<section>
    <div class="block remove-gap">
        <div class="container">
            <div class="row">
                <div class="title2">
                    <span>The House Of Destiny Church</span>
                    <h2>OUR <span>MINISTRIES</span></h2>
                </div>
                <div class="col-md-8 column">
                    <div class="tab-style">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li class="col-md-3 active"><a data-toggle="tab" href="#tab1">Men Ministry</a></li>
                            <li class="col-md-3"><a data-toggle="tab" href="#tab2">Women Ministry</a></li>
                            <li class="col-md-3"><a data-toggle="tab" href="#tab3">Music Ministry</a></li>
                            <li class="col-md-3"><a data-toggle="tab" href="#tab4">Youth Ministry</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Accusantium Erroret Cupiditate Necess</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullaw metusv estas rhoncus. Donec facilisis fermentum sem, ac viverra anteu metuse Donec vel mauris quam. Lorem ipsum dolor sit amet, consectei.</p>
                                        <div class="space"></div>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                            <li><i class="fa fa-check"></i> Loriem ipsum dolo stamet cons ctetur adipiscing elit. </li>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/resource/ministry.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Accusantium Erroret Cupiditate Necess</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullaw metusv estas rhoncus. Donec facilisis fermentum sem, ac viverra anteu metuse Donec vel mauris quam. Lorem ipsum dolor sit amet, consectei.</p>
                                        <div class="space"></div>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                            <li><i class="fa fa-check"></i> Loriem ipsum dolo stamet cons ctetur adipiscing elit. </li>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/resource/ministry2.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Accusantium Erroret Cupiditate Necess</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullaw metusv estas rhoncus. Donec facilisis fermentum sem, ac viverra anteu metuse Donec vel mauris quam. Lorem ipsum dolor sit amet, consectei.</p>
                                        <div class="space"></div>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                            <li><i class="fa fa-check"></i> Loriem ipsum dolo stamet cons ctetur adipiscing elit. </li>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/resource/ministry.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>Accusantium Erroret Cupiditate Necess</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullaw metusv estas rhoncus. Donec facilisis fermentum sem, ac viverra anteu metuse Donec vel mauris quam. Lorem ipsum dolor sit amet, consectei.</p>
                                        <div class="space"></div>
                                        <ul>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                            <li><i class="fa fa-check"></i> Loriem ipsum dolo stamet cons ctetur adipiscing elit. </li>
                                            <li><i class="fa fa-check"></i> Cras dignissim lacus eget urna fringilla placerat.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/resource/ministry3.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- TABS STYLE -->
                </div>
                <div class="col-md-4 column">
                    <div id="toggle" class="simple-toggle">
                        <div class="toggle-item">
                            <h2><img src="images/icon2.png" alt="" />MISSION STATEMENT</h2>
                            <div class="content">
                                <p>
                                        We exist to reach, disciple, equip and show compassion to the lost and needy in pursuit of their destiny in Christ as Bible-believing and Bible-practicing people who know and follow Christ.
                                </p>
                            </div>
                        </div>
                        <div class="toggle-item">
                            <h2><img src="images/icon3.png" alt="" />VISION STATEMENT</h2>
                            <div class="content">
                                <p>
                                    We strive to be a relevant, yet uncompromising church that worships Christ in spirit and in truth, actively focusing on young people.
                                </p>
                            </div>
                        </div>
                        <div class="toggle-item">
                            <h2><img src="images/icon3.png" alt="" />REQUEST YOUR PRAYERS</h2>
                            <div class="content">
                                <p>The House of Destiny Church is all about compassion. Send your prayer requests to us. </p>
                                <form>
                                    <input type="text" placeholder="Name" />
                                    <textarea placeholder="Write Your Words"></textarea>
                                    <a href="#" class="button2" title=""><i class="fa fa-envelope"></i>Send</a>
                                </form>
                                </div>
                            </div>
                    </div><!-- ACCORDIONS -->
                </div>
            </div>
        </div>
    </div>
</section> 
<section>
<div class="block blackish">
    <div class="parallax" style="background:url(images/parallax2.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="upcoming-event">
                    <div class="row">
                        <div class="col-md-6 column">
                            <h3><i class="fa fa-bank"></i> Latest Event</h3>
                            <span><i class="fa fa-calendar-o"></i> {{$event['date']}}</span>
                            <span><i class="fa fa-clock-o"></i> {{$event['start_time']}}</span>
                            <p>{!! str_limit($event['description'], $limit = 200, $end = '...') !!}</p>
                            <div class="remaining-time">
                                <div class="col-md-6 column">
                                    <h5>{{$event['title']}}</h5>
                                    <span>{{$event['location']}}</span>
                                </div>
                                <div class="col-md-6 timing column">
                                        <a class="button" href="/events/{{$event['id']}}" title="">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 column">
                                <iframe height="280" src="https://www.youtube.com/embed/gv_DzgrR4JA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="title2">
                    <span>The House Of Destiny Church</span>
                    <h2>DAILY <span>DEVOTIONS & SERMONS</span></h2>
                </div>
                <div class="col-md-6 column">
                    <div class="latest-sermons remove-ext">
                        @if(count($devotions) >0 )
                            @foreach ($devotions as $devotion)
                            <div class="sermon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="image">
                                            <img src="/images/sermons_images/{{$devotion->image}}" alt="" />
                                            <a href="#" title=""><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3><a href="#" title="">{{$devotion->title}}</a></h3>
                                        <span><i class="fa fa-calendar-o"></i> {{$devotion->created_at}}</span>
                                        <p>{!!$devotion->description!!}</p>
                                    </div>
                                    <div class="hover-in">
                                        <ul class="sermon-media">
                                            <li><a title=""><i class="audio-btn fa fa-headphones"></i>
                                                    <div class="audioplayer"><audio src="/sermons/{{$devotion->audio}}"></audio><span class="cross">X</span></div>
                                                </a></li>
                                            <li><a target="_blank" href="/sermons/{{$devotion->audio}}" title=""><i class="fa fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- SERMON -->
                            @endforeach   
                        @else
                        <h2>No Devotions To Show</h2>
                        @endif
                    </div><!-- LATEST SERMONS -->
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block blackish">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="parallax-title">
                        <h3 class="special-text">REACH <span>OUT</span></h3>
                        <p>Don't suffer in silence <br /> The house of Destiny Church Team is here for you.</p>
                    </div>
                    <form class="prayer-request">
                        <input type="text" placeholder="Do you feel the urge to talk to someone?">
                        <input type="submit" value="Request Prayers" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block remove-gap">
        <div class="container">
            <div class="row">
                <div class="title2">
                    <span>The House Of Destiny Church</span>
                    <h2>OUR <span>GALLERY</span></h2>
                </div>
                <div class="col-md-12 column">
                    <div class="remove-ext">
                        <div class="row">
                            <div class="mas-gallery">
                                @if(count($galleries) >0 )
                                    @foreach ($galleries as $gallery)
                                        <div class="col-md-3">
                                            <div class="gallery lightbox">
                                                <img src="/images/gallery/{{$gallery->image}}" alt="{{$gallery->description}}" /> 
                                                <div class="gallery-title">
                                                    <i class="fa fa-picture-o"></i>
                                                    <h3>{!!$gallery->description!!}</h3>
                                                </div>
                                                <ul>
                                                    <li><a  href="/images/gallery/{{$gallery->image}}" title="{{$gallery->desctiption}}"><img src="images/resource/gallery-thumb1.jpg" alt="{{$gallery->description}}" /></a></li>
                                                </ul>
                                            </div><!-- GALLERY ITEM -->
                                        </div>
                                    @endforeach   
                                    {{$galleries->links()}} 
                                    @else
                                        <h3>No photos available</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block remove-gap coloured">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-tweets">
                        <span><i class="fa fa-group"></i></span>
                        <div class="tweets-slides">
                            <div class="tweet">
                                <p>The House of Destiny Church is an amazing place. The music is amazing and everyone is so kind and welcoming</p>
                                <span>( Kimani Mbugua - Software Developer )</span>
                            </div>
                            <div class="tweet">
                                <p>The House of Destiny Church is an amazing place. The music is amazing and everyone is so kind and welcoming</p>
                                <span>( Kimani Mbugua - Software Developer )</span>
                            </div>
                            <div class="tweet">
                                <p>The House of Destiny Church is an amazing place. The music is amazing and everyone is so kind and welcoming</p>
                                <span>( Kimani Mbugua - Software Developer )</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
