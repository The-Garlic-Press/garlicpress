<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
      $posts = Post::published()->newestFirst()->paginate(4);
      return view('site.home', compact('posts'));
    }
}
