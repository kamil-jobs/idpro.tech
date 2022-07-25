<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {

        $posts = Post::paginate(7);
        $date = Carbon::parse($post->created_at);
        $count = 1;
        return view('post.index',compact('posts','count','date'));
    }
}
