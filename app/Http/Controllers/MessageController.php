<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('message.index', ['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:messages|max:255',
            'command' => 'required',
            'content' => 'required|max:255'
        ]);


        $name = $request->input('name');
        $command = $request->input('command');
        $content = $request->input('content');
        $response = $request->input('response');
        $notes = $request->input('notes');


        $message  = new Message;
        $message->name = $name;
        $message->command = $command;
        $message->content = $content;
        $message->response = $response;
        $message->notes = $notes;


        $message->save();

        return redirect('message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::find($id);
        if(!empty($message)){
            return view('message.edit', ['m'=>$message]);
        } else{
            return abort('404');
        }

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
        $this->validate($request, [
            'name' => 'required|max:255',
            'command' => 'required',
            'content' => 'required|max:255'
        ]);

        $message = Message::find($id);
        $name = $request->input('name');
        $command = $request->input('command');
        $content = $request->input('content');
        $response = $request->input('response');
        $notes = $request->input('notes');


        $message->name = $name;
        $message->command = $command;
        $message->content = $content;
        $message->response = $response;
        $message->notes = $notes;
        $message->save();

        return redirect('message');
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
    }


}
