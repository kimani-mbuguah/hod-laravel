<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Sermon;
use App\SliderOne;

class PagesController extends Controller
{
    public function index(){
        $sliderones = SliderOne::all();
        return view('pages.index')->with('sliderones',$sliderones);
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
}
