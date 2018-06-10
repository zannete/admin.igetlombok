<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Admin;
use App\PostCategory;

class PostController extends Controller{ 
  public function index(Request $request){
    $pagination = 10;

    $data["startIndex"] = ($request->has("page") && ($request->input("page") - 1) > 0)?(($request->input("page") - 1) * $pagination) + 1:1;
    $data["posts"] = Post::paginate($pagination);
    foreach($data["posts"] as $post){
      $post->author = Admin::find($post->admin_id);
      $post->category = PostCategory::find($post->post_category_id);
    }  
    return view("pages.posts.index")->with($data);
  }

  public function create(){
    $data["categories"] = PostCategory::all();
    return view("pages.posts.create")->with($data);
  }

  public function store(Request $request){
    
  }
}
