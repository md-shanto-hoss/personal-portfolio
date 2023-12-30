<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Review;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function cvDownload()
    {

    }


    public function hire(Request $request)
    {
        Message::newMessage($request);

        return back()->with('message', 'Your message submit successful');
    }

    public function review(Request $request)
    {
        Review::newReview($request);

        return back()->with('message', 'Your review sent successful');
    }
}
