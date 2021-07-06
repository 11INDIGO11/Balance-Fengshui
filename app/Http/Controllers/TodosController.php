<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use mysql_xdevapi\Schema;

class TodosController extends Controller
{
    public function __construct(){
        $this->middleware('auth:partner');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = Todo::OrderBy('score_view','desc')->get();
        return view('user_contract')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reply');
    } /////////////////////////////FOR USER

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        dd('This is show funtion99'.$id);
        $todo = Todo::find($id);
        return view('detail_user_contract')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('reply_edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->score_view = $request->input('score_view');
        $scoreView = $request->scoreView;
        $todo->score_view = $scoreView;


        $todo->save();

        // return .. go to index and send message


        return redirect('/')
            ->with('success','Edit Success ID = '.$id)
            ->with('editAgain',$todo->id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/usercontract')->with('success','Delete Success ID = '.$id);
    }



}
