<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{   

    public function __construct() {
        $this->middleware('auth' , ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::all();
        return view('blog.index')
            ->with('posts' , Post::orderBy('updated_at' , 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        Post::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'number' => $request->input('number'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message' , 'contact added!');
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
        return view('blog.edit')
             ->with('post' , Post::where('id', $id)->first());
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        Post::where('id' , $id)
           ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'number' => $request->input('number'),
            'user_id' => auth()->user()->id
           ]);

           return redirect('/blog')
              ->with('message', 'Contact Updated...');


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
        $post = Post::where('id' , $id);
        $post->delete();

        return redirect('/blog')
         ->with('message' , 'Contact deleted...');
    }
}
