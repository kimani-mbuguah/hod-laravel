<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
