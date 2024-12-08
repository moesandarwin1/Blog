<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id','DESC')->paginate(10);
        //var_dump($categories);
        return view('front.blogs',compact('posts'));
    }

    public function blogPost($id){
        $post = Post::find($id);
        //var_dump($post);
        return view('front.blog-post',compact('post'));
    }
}
