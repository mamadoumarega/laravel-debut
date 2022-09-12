<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Mon super titre';

        return view('articles')->with('title', $title);
    }

    public function show($id)
    {
        $posts = [
          1 => 'Mon titre n°1',
          2 => 'Mon titre n°2'
        ];

        $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post' => $post
        ]);

    }

    protected function contact()
    {
        return view('contact');

    }
}
