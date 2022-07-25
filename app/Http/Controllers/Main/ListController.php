<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke(Post $post)
    {

        $posts = Post::all();
        $date = Carbon::parse($post->created_at);
        $count = 1;
        return view('post.list',compact('posts','count','date'));
    }
}
