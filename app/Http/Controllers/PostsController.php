<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/posts');
            $image->move($destinationPath, $name);

            $post->image = $name;
         }

        $post->save();

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
        $post = Post::fund($id);
        dd($post);
        return view('posts.show', compact('post'));
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
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
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

       $post = Post::find($id);

       if ($request->hasFile('image')) {

           $image = $request->file('image');
           $name = time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/images/posts');
           $image->move($destinationPath, $name);

           $post->image = $name;
        }else{
            $image = null;
        }

       $request->$post->update([
        'title' => $request->input('title'),
        'body' => $request->input('body'),
        'category_id' => $request->input('category_id'),
        'image' => $image
       ]);

       return view('posts.edit/{$id}')->with('success', 'post updated sucessfully');
    }

    public function upload_image(Request $request)
    {

        $request->user()->avatar = $request->image;
        $request->user()->save();

        return $request->user()->avatar;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->back()->with('success', 'post deleted successfully');
    }
}
