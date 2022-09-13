<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // for updating
//        $post = Post::find(1);
//        $post->update([
//            'title' => 'Titre édité'
//        ]);
//
//        dd('édité');

        $posts = Post::orderBy('title')->take(10)->get();

        return view('articles',[
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
//        $post = new Post();
//        $post->title = $request->title;
//        $post->content = $request->content;
//        $post->save();
//        dd('Post crée');

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }

    public function show($id)
    {
        $post =  Post::findOrFail($id);

        return view('article', [
            'post' => $post
        ]);

    }

    protected function contact()
    {
        return view('contact');

    }
}
