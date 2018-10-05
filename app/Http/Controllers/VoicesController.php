<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use App\VoiceLang;

class VoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voices = Voice::all();
        $langs = config('content.langs');        
        return view('voices.index', compact(['voices', 'langs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = config('content.langs');
        return view('voices.create', compact(['langs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voise = new Voice;
        $langs = config('content.langs');
         
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/posts');
            $image->move($destinationPath, $name);

            $voise->image = $name;
         }

        //save langs
        foreach ($langs as $key => $value) {
            $voiseLang = new VoiceLang;
            $voiseLang->title = $request->input('title');
            $voiseLang->body = $request->input('body');
            $voiseLang->message = $request->input('message');
            $voiseLang->save();
        }

        $voise->save();

        return back()->with('success', 'post created sucessfully');
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
        $post = Voice::find($id);
        $langs = config('content.langs'); 

        return view('voices.edit', compact(['post', 'langs']));
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
       
        $post = Voice::find($id);

        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'message' => $request->input('message'),
           ]);
    
           return back()->with('success', 'post updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Voice::find($id);
        $post-> delete();
        return back()->with('success', 'post deleted');
    }
}
