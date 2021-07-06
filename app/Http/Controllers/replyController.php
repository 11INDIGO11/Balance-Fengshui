<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use mysql_xdevapi\Schema;

class replyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reply');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,
            [
                'title'=>'required',
                'content'=>'required',
                'due'=>'required',
                'score_view'=>'required',
                'file'=>'required|mimes:jpeg,jpg,png,gif|max:2048'
            ]
        );
//        dd($request->file());
        $file_name = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'),$file_name);

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->score_view = $request->input('score_view');

        $todo->file_name = $file_name;


        $todo->save();

        return redirect('/usercontract')->with('success','SUCCESS');
    }





}
