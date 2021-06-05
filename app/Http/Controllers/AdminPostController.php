<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function getPosts()
    {
        $posts = db::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select(   'posts.title',
                'posts.id',
                'posts.user_id',
                'posts.confirmed',
                'posts.created_at',
                'users.email',
                )->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.views.posts',compact('posts'));
    }

    function store(Request $request){
        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/PostPhoto'), $imageName);

        $sendData = [
            'title'     => $request->input('title'),
            'body'      => $request->input('body'),
            'confirmed' => 1,
            'img_url'   => 'images/PostPhoto/' . $imageName,
            'user_id'   => Auth::id(),
            'category'  => $request->input('category')
        ];
        Post::create($sendData);

        return redirect()->route('adm.posts');
    }

}
