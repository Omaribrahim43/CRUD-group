<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $data = Post::all();
        return view('view', ['data' => $data]);
    }
}
