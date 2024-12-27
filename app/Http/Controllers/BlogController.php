<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function blog(){
        
        //var_dump($categories);
        $feature_posts = Post::orderBy('id','DESC')->limit(1)->first();
        $posts = Post::where('id', '!=',$feature_posts->id)->orderBy('id','DESC')->paginate(10);
        return view('front.blogs',compact('posts','feature_posts'));
    }

    public function blogPost($id){
        $post = Post::find($id);
        //var_dump($post);
        $category_id = $post->category_id;
        return view('front.blog-post',compact('post'));
    }
    public function postCategory($category_id){
        $posts = Post::where('category_id',$category_id)->orderBy('id','DESC')->paginate(8);
        return view('front.post-category',compact('posts'));

    }
}
