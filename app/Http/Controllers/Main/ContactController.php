<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Notifications\TelegramMsg;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class ContactController extends Controller
{


    public function contact(){
        return view('contact');
    }
    public function toTelegram(Request $request){
        Notification::send($request, new TelegramMsg());

        return redirect()->route('post.index');
    }
}
