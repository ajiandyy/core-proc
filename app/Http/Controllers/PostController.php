<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator,Redirect,Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.home', compact('posts'));
    }

    public function view($post)
    {
        $post = Post::where('postID', $post)->first();
        if($post)
        {
            return view('posts.viewpost', compact('post'));
        } else {
            return abort(403);
        }

    }

    public function edit($post)
    {
        $post = Post::where('postID', $post)->first();
        if($post)
        {
            return view('posts.editpost', compact('post'));
        } else {
            return abort(403);
        }
    }

    public function update($post, Request $request)
    {
        $request->validate([
           'title' => 'required',
           'author' => 'required',
           'content' => 'required'
        ]);
        $date = date('Y-m-d H:i:s');
        $post = Post::where('postID', $post)->first();
        if($post)
        {
            $post->update([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'content' => $request->input('content'),
                'updated_at' => $date
            ]);
            return redirect::to('home')->with('updated', 'You have successfully updated the post.');
        } else {
            return abort(403);
        }
    }

    public function delete($post)
    {
        $post = Post::where('postID', $post)->first();
        if($post)
        {
            $post->delete();
            return redirect::to('home')->with('deleted', 'You have successfully deleted the post.');
        } else {
            return abort(403);
        }
    }

    public function add()
    {
        return view('posts.addpost');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required'
        ]);

        $date = date('Y-m-d H:i:s');

        Post::create([
           'title' => $request->input('title'),
           'author' => $request->input('author'),
           'content' => $request->input('content'),
           'created_at' => $date
        ]);

        return redirect::to('home')->with('added', 'You have successfully added the post.');
    }

}
