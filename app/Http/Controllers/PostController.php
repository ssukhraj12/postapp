<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = User::with('posts')->paginate(5);
        return view('welcome',[
            'posts'=>$posts,
        ]);
    }
}
