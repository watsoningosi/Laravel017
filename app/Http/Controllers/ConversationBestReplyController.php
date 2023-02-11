<?php

namespace App\Http\Controllers;

use App\Models\Replies;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    public function store(Replies $reply)
    {
        $this->authorize($reply->conversation);

        $reply->conversation->best_reply_id = $reply->id;

        $reply->conversation->save();

        return back();

    }
}
