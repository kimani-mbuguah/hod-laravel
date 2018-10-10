<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;

class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::orderBy('created_at','desc')->paginate(6);
        return view('sermons.index')->with('sermons',$sermons);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sermons.create');
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
            'description' => 'required'
        ]);
        $sermon = new Sermon;
        $sermon->title = $request->input('title');
        $sermon->description = $request->input('description');
        if ($request->hasFile('sermon_image')) {
            $photoName = time().'.'.$request->sermon_image->getClientOriginalExtension();
            $request->sermon_image->move(public_path('/images/sermons_images'), $photoName);
            $sermon->image = $photoName;
        }else{
            $sermon->image = "default.jpg";
        }

        if ($request->hasFile('audio')) {
            $audioName = time().'.'.$request->audio->getClientOriginalExtension();
            $request->audio->move(public_path('/sermons'), $audioName);
            $sermon->audio = $audioName;
        }else{
            $sermon->image = "default.mp3";
        }

        $sermon->save();
        return redirect('/home')->with('success','Sermon Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sermon = Sermon::find($id);
        return view('sermons.edit')->with('sermon',$sermon);
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
            'description' => 'required'
        ]);
        $sermon = new Sermon;
        $sermon->title = $request->input('title');
        $sermon->description = $request->input('description');
        if ($request->hasFile('sermon_image')) {
            $photoName = time().'.'.$request->sermon_image->getClientOriginalExtension();
            $request->sermon_image->move(public_path('/images/sermons_images'), $photoName);
            $sermon->image = $photoName;
        }else{
            $sermon->image = "default.jpg";
        }

        if ($request->hasFile('audio')) {
            $audioName = time().'.'.$request->audio->getClientOriginalExtension();
            $request->audio->move(public_path('/sermons'), $audioName);
            $sermon->audio = $audioName;
        }else{
            $sermon->image = "default.mp3";
        }

        $sermon->save();
        return redirect('/home')->with('success','Sermon Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sermon = Sermon::find($id);
        $sermon->delete();
        return redirect('/home')->with('success','Sermon Deleted Successfully');
    }
}