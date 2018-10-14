<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devotions;

class DevotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devotions = Devotiosn::orderBy('created_at','desc')->paginate(6);
        return view('devotions.index')->with('devotions',$devotions);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devotions.index');
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
        $devotion = new Devotions;
        $devotion->title = $request->input('title');
        $devotion->description = $request->input('description');
        if ($request->hasFile('devotion_image')) {
            $photoName = time().'.'.$request->devotion_image->getClientOriginalExtension();
            $request->devotion_image->move(public_path('/images/sermons_images'), $photoName);
            $devotion->image = $photoName;
        }else{
            $devotion->image = "default.jpg";
        }

        if ($request->hasFile('audio')) {
            $audioName = time().'.'.$request->audio->getClientOriginalExtension();
            $request->audio->move(public_path('/sermons'), $audioName);
            $devotion->audio = $audioName;
        }else{
            $devotion->image = "default.mp3";
        }

        $devotion->save();
        return redirect('/home')->with('success','Devotion Created Successfully');
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
        $devotion = Devotions::find($id);
        return view('devotions.edit')->with('devotion',$devotion);
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
        $devotion = new Devotions;
        $devotion->title = $request->input('title');
        $devotion->description = $request->input('description');
        if ($request->hasFile('devotion_image')) {
            $photoName = time().'.'.$request->devotion_image->getClientOriginalExtension();
            $request->devotion_image->move(public_path('/images/sermons_images'), $photoName);
            $devotion->image = $photoName;
        }else{
            $devotion->image = "default.jpg";
        }

        if ($request->hasFile('audio')) {
            $audioName = time().'.'.$request->audio->getClientOriginalExtension();
            $request->audio->move(public_path('/sermons'), $audioName);
            $devotion->audio = $audioName;
        }else{
            $devotion->image = "default.mp3";
        }

        $devotion->save();
        return redirect('/home')->with('success','Changes Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devotion = Devotions::find($id);
        $devotion->delete();
        return redirect('/home')->with('success','Devotion Deleted Successfully');
    }
}
