<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Sermon;
use App\Event;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        $footerPosts = Post::orderBy('created_at','desc')->take(2)->get();
        $latestSermon = Sermon::orderBy('created_at','desc')->first();
        $event = Event::orderBy('created_at','desc')->first();
        return view('posts.index')
        ->with('latestSermon',$latestSermon)
        ->with('event',$event)
        ->with('footerPosts',$footerPosts)
        ->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->created_by = auth()->user()->name;
        $photoName = time().'.'.$request->post_image->getClientOriginalExtension();
        $request->post_image->move(public_path('/images/blog_images'), $photoName);
        $post->image = $photoName;

        $post->save();
        return redirect('/home')->with('success','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.postSingle')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->created_by = auth()->user()->name;
        $photoName = time().'.'.$request->post_image->getClientOriginalExtension();
        $request->post_image->move(public_path('/images/blog_images'), $photoName);
        $post->image = $photoName;
        $post->save();
        return redirect('/home')->with('success','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/home')->with('success','Post Deleted Successfully');
    }
}
