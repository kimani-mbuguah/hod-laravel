@extends('layouts.web')
@section('content')
<div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
        <div class="container"> 
            <h1>HoD <span>GALLERY</span></h1>
            <ul>
                <li><a href="/" title="">Home</a></li>
                <li><a href="#" title="">House of Destiny Church Gallery</a></li>
            </ul>
        </div>
    </div><!--- PAGE TOP -->
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
@endsection