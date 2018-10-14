<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Post;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at','desc')->paginate(6);
        $footerPosts = Post::orderBy('created_at','desc')->take(2)->get();
        $showEvent = Event::orderBy('created_at','desc')->first();
        return view('events.index')
        ->with('footerPosts',$footerPosts)
        ->with('events',$events)
        ->with('showEvent',$showEvent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            'description' => 'required',
            'image' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);
        $event = new Event;
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->start_time = $request->input('start_time');//this is a bug
        $event->end_time = $request->input('end_time');
        $event->location = $request->input('location');
        $event->posted_by = auth()->user()->name;
        $event->description = $request->input('description');

        $photoName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/images/event_images'), $photoName);
        $event->image = $photoName;
        $event->save();
        return redirect('/home')->with('success','Event Created Successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.eventSingle')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
