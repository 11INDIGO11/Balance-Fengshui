<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

//    public function __construct()
//    {
//        return $this->middleware('auth');
//    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {

        $this->validate($request,
            [
                'title'=>'required',
                'body'=>'required',
                'file'=>'required|mimes:jpeg,jpg,png,gif|max:5000',
            ]
        );

       $file_name = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'),$file_name);

        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->file_name = $file_name;

        $post->save();

        return redirect('partials');
    }

    public function index()
    {
        $posts = Post::select('id', 'title','file_name','body')->get();
        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }
}
