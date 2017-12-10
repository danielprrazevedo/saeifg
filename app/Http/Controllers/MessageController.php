<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequestStore;
use App\LogMessage;
use App\Message;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = new Message();
        $messages = $message->messagesUser();
        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('message.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MessageRequestStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequestStore $request)
    {
        $values = $request->all();
        $values = array_merge($values, ['receiver' => 'R', 'sender_id' => \Auth::id()]);
        $message = Message::create($values);
        $values = array_merge($values, ['message_id' => $message->id]);
        LogMessage::create($values);
        return redirect(route('message.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = Message::find($id)->messages();
        return view('message.messages')
            ->with('messages', $messages)
            ->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $message = Message::find($id);
        $values = array_merge($request->all(), ['message_id' => $id, 'receiver' => $message->charReceiver()]);

        LogMessage::create($values);
        return redirect(route('message.show', $id));
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
