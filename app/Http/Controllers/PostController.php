<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    public function index(){
        //$post = Post::all();
        $categories = Category::find(3);

        // $posts = Post::where('category_id', $categories->id)->get();
        dump($categories->posts);
        
        // return view('post.index',compact('post'));
    }
    public function create(){
                return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>'string',
            'content' =>'string',
            'likes' =>'integer',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }
    public function edit(Post $post){
        return view('post.edit',compact('post'));
        //return view('post.show',compact('post'));
    }
    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('post.index');
        //return view('post.show',compact('post'));
    }


    public function update(Post $post){

        $data = request()->validate([
            'title' =>'string',
            'content' =>'string',
            'likes' =>'integer',
        ]);
        $post->update($data);
        return redirect()->route('post.index');
    }
    public function delete(){
        $post = Post::find(1);
        $post->delete();
        dump($post);
    }
    public function firsOrCreate(){
        // $post = Post::find(1);

        $anotherPost = [
            'title' => 'davai davai',
            'image' => '',
            'content' => 'Nihuao govno',
            'likes' => 23,
            'is_publisher' => 1
        ];
        $mypost = Post::firstOrCreate([
            'title' => 'davai davai',
        ],[
            'title' => 'davai davai',
            'image' => '',
            'content' => 'Nihuao govno',
            'likes' => 23,
            'is_publisher' => 1
        ]);
        dump($mypost);
    }
    public function updateOrCreate(){
        $anotherPost = [
            'title' => 'sasi davai',
            'image' => '',
            'content' => 'aa govno',
            'likes' => 23,
            'is_publisher' => 1
        ];
        $post = Post::updateOrCreate([
            'title' => 'sadavai davai',
        ],[
            'title' => 'sadavai davai',
            'image' => '',
            'content' => 'Nihuao govno',
            'likes' => 23,
            'is_publisher' => 1
        ]);
        dump($post->title);
    }

}
