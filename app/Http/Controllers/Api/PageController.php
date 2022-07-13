<?php

namespace App\Http\Controllers\Api;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

    $posts = Post::with("Category")->with("Tags")->get();

    return response()->json($posts);
   }
}
