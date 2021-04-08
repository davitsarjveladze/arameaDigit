<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Events\NewMessageAdded;

class ChatController extends Controller
{
    //
    public function GetView() {
        return view('chat');
    }

    public function GetIndex() {
        $messages = Message::all();
        return view('chat.index',compact('messages'));
    }
    public function postMessege(Request $request) {
        $message = Message::create([
            'author' => Auth::id(),
            'content'=> $request->input('content'),
            'chat' => 1
        ]);
        event(
            new NewMessageAdded($message)
        );
        return redirect()->back();
    }
}
