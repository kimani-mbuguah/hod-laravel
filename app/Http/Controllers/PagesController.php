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
use App\Message;

class PagesController extends Controller
{
    public function index(){
        $sliderones = SliderOne::all();
        $slidertwos = SliderTwo::all();
        $sliderthrees = SliderThree::all();
        $devotions = Devotions::orderBy('created_at','desc')->paginate(4);
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
        $devotions = Devotions::orderBy('created_at','desc')->get();
        $footerPosts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('pages.about')
        ->with('devotions',$devotions)
        ->with('footerPosts',$footerPosts);
    }

    public function contact(){
        $footerPosts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('pages.contact')->with('footerPosts',$footerPosts);
    }

    public function allPosts(){
        $messages = Message::orderBy('created_at','desc')->take(5)->get();
        $totalMessages = Message::count();
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('posts.all')
        ->with('posts',$posts)
        ->with('totalMessages',$totalMessages)
        ->with('messages',$messages);
    }

    public function allSermons(){
        $messages = Message::orderBy('created_at','desc')->take(5)->get();
        $totalMessages = Message::count();
        $sermons = Sermon::orderBy('created_at','desc')->paginate(6);
        return view('sermons.all')
        ->with('sermons',$sermons)
        ->with('totalMessages',$totalMessages)
        ->with('messages',$messages);
    }

    public function allDevotions(){
        $messages = Message::orderBy('created_at','desc')->take(5)->get();
        $totalMessages = Message::count();
        $devotions = Devotions::orderBy('created_at','desc')->paginate(6);
        return view('devotions.all')
        ->with('devotions',$devotions)
        ->with('totalMessages',$totalMessages)
        ->with('messages',$messages);
    }
    public function clear(){
        Artisan::call('cache:clear');
    }
}
