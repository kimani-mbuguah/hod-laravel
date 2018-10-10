<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Sermon;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function events(){
        return view('pages.events');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function sermons(){
        return view('pages.sermons');
    }

    public function addevent(){
        return view('addEvent');
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
