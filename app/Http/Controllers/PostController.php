<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
//     public function addPost(){
//         return view('add-post');
//     }

//     public function create(){
//         return view('add-post');
//     }
//     public function store(Request $request){
//         $post = new Post();
//         $post->full_name = $request->full_name;
//         $post->age = $request->age;
//         $post->address = $request->address;
//         $post->co_latitude = $request->co_latitude;
//         $post->co_longitude = $request->co_longitude;
//         $post->contact_no = $request->contact_no;
//         $post->save();
//         return redirect()->back()->with('post_created','Post has been created successfully');
//     }

//     public function getPost(){
//         $posts = Post::orderBy('id','DESC')->get();
//         return view('posts',compact('posts'));
//     }

//     public function deletePost($id){
//         Post::where('id',$id)->delete();
//         return back();
// }
}
