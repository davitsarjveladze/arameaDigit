<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title'=>'required',
//            'body'=>'required',
//        ]);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/PostPhoto'), $imageName);

        $sendData = [
            'title'     => $request->input('title'),
            'body'      => $request->input('body'),
            'confirmed' => 0,
            'img_url'   => 'images/PostPhoto/' . $imageName,
            'user_id'   => Auth::id(),
            'category'  => $request->input('category')
        ];
                Post::create($sendData);

         return redirect()->route('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function ShowPost($type){
        $types = [
            'culture' => 1,
            'life' => 2,
            'solidarity' => 3
        ];
        $posts = db::table('posts')
            ->where('posts.confirmed','=',1)
            ->where('posts.category','=',$type)
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select(   'posts.title',
                                'posts.id',
                                'posts.img_url',
                                'posts.user_id',
                                'posts.created_at',
                                'users.name',
                                'users.user_img')->paginate(6);

        return view('posts',compact('posts'));

    }
}
