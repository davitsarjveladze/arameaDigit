<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{

    protected $fillable = ['user_id', 'forum_id', 'parent_id', 'body'];

    public function GetView() {
        return view('forum');
    }

    public function GetDetailView($id)
    {
        $Data = ['id' => $id];
        $Data['comment'] =   forum::all();
        return view('forumDetail',compact('Data'));
    }

    public function storeForumComment(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);
        $insertInput = [
            'body' => $request['body'],
            'post_id' => $request['post_id'],
            'user_id'   => auth()->user()->id,
        ];
        DB::table('forum_comments')->insert($insertInput);
        return back();
    }
}
