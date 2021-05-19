<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()

    {
        $posts = [
            'mon super titre ',
            'mon seconf titre'
        ];
        return view('Articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts = [
            1 => 'mon titre n1',
            2 => 'mon titre n2'
        ];

        $post = $posts[$id];

        return view('Article', [
            'post' => $post

        ]);
    }

    public function contact()

    {
        return view('contact');
    }
}
