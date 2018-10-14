<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderThree;

class SliderThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carousel.sliderthree');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'text_one' => 'required',
            'text_two' => 'required',
            'text_three' => 'required',
            'bg_image' => 'required'
        ]);
        $sliderThree = new SliderThree;
        $sliderThree->text_one = $request->input('text_one');
        $sliderThree->text_two = $request->input('text_two');
        $sliderThree->text_three = $request->input('text_three');
        $imageName = time().'.'.$request->bg_image->getClientOriginalExtension();
        $request->bg_image->move(public_path('/images/slider'), $imageName);
        $sliderThree->bg_image = $imageName;
        $sliderThree->save();
        return redirect('/home')->with('success','Changes Saved');
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
