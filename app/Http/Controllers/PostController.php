<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function insertPost(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return back()->with('created_post', 'Post has been created successfully');

    }


    public function getPost()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('posts', compact('posts'));
    }

    public function getPostId($id){

        $post = Post::where('id', $id)->first();
        return view('single-post', compact('post'));

    }

    public function deletePost($id)
    {
      Post::where('id', $id)->delete();

      return back()->with('delete_post', 'Post has been deleted');

    }

    public function editPost($id)
    {
        $post = Post::find($id);

        return view('edit-post', compact('post'));
    }



    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);

        $post->title = $request->title;
        $post->body  = $request->body;


        $post->save();

        return back()->with('update_post', 'post has been updated successfully');
    }
}
