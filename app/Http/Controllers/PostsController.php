<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Illuminate\Support\Facades\Redirect;



class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->toArray();
        return view('blogs.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);
             $new_post = new Post();
             if($request)
             {
                $new_post->title = $request->title;
                $new_post->url = $request->url;
                $new_post->description = $request->description;
                $new_post->save();
             }
             $posts = Post::all()->toArray();

             return view('blogs.index','posts')->with('success','Post is succesfully added to your blog!!!!!!!!!');


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
        $post = Post::where('id', $id)->first();
        return view('blogs.edit',compact('post'));
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
      $result = DB::table('posts')
      ->where('id', $id)
      ->update([
          'title' => $request['title'],
          'url' => $request['url'],
          'description' => $request['description'],
          'updated_at' => date("Y-m-d", strtotime(NOW()))
          ]);
          $posts = Post::all()->toArray();

      if($result)
      {
      return view('blogs.index',compact('posts'))->with('success','your post was edited succesfully');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id',$id)->delete();
        if($post)
        {
            return Redirect::back()->with('success', 'Post Deleted Successfully');
        }

    }
}
