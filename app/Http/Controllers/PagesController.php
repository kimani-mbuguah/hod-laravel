<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Sermon;
use App\SliderOne;
use App\SliderTwo;
use App\SliderThree;
use App\Event;
use App\Devotions;
use App\Gallery;

class PagesController extends Controller
{
    public function index(){
        $sliderones = SliderOne::all();
        $slidertwos = SliderTwo::all();
        $sliderthrees = SliderThree::all();
        $devotions = Devotions::all();
        $event = Event::orderBy('created_at','desc')->first();
        $galleries = Gallery::orderBy('created_at','desc')->paginate(8);
        $footerPosts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('pages.index')
        ->with('sliderones',$sliderones)
        ->with('slidertwos',$slidertwos)
        ->with('sliderthrees',$sliderthrees)
        ->with('event',$event)
        ->with('devotions',$devotions)
        ->with('galleries',$galleries)
        ->with('footerPosts',$footerPosts);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function allPosts(){
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('posts.all')->with('posts',$posts);
    }

    public function allSermons(){
        $sermons = Sermon::orderBy('created_at','desc')->paginate(6);
        return view('sermons.all')->with('sermons',$sermons);
    }

    public function allDevotions(){
        $devotions = Devotions::orderBy('created_at','desc')->paginate(6);
        return view('devotions.all')->with('devotions',$devotions);
    }
}
