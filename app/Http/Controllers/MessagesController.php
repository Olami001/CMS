<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request)
    {
       // return $request->input('name');
       $this->validate($request,[
           'name' => 'required',
           'email'=> 'required'
       ]);

    //    Create new message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');

    // save message
    $message->save();

    //Redirect back to homepage
    return redirect('/')->with('success','Message Sent');
    }

    public function Messages()
    {
        $messages = Message::all(); 
        return view('messages')->with('messages', $messages);
    }
    
    public function delete()
    {
      $messages = Message::find(2);
      $messages->delete();
    }
}
