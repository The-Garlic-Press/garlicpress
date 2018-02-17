<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Request $request, $year, $month, $slug)
    {
      $post = Post::whereSlug($slug)->whereYear('created_at', $year)->whereMonth('created_at', $month)->published()->firstOrFail();
      return view('post.show', compact('post'));
    }
}
