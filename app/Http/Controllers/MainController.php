<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{
    public function index(){
        $post = Post::all();
        
        return view('layouts.main',compact('post'));
    }
}
