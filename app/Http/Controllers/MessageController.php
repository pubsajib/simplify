<?php
namespace App\Http\Controllers;
use App\Message;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageNotification;
use Illuminate\Http\Request;

class MessageController extends Controller {
    public function index() {
        $name = $email = $class = '';
        if ($user = auth()->user()) {
            $name = $user->name;
            $email = $user->email;
            $class = 'd-none';
        }
        return view('contact', compact('name', 'email', 'class'));
    }
    public function create() {
        //
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        // return (new MessageNotification())->render();;
        // Store categories
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->msg;
        $message->save();
        
        // Mail::to('someone@gmail')->send(new MessageNotification);

        Session::flush('success', 'Message sent successfully.');
        return redirect()->route('home');
    }
    public function show(Message $message, $id) {
        
    }
    public function edit(Message $message) {
        //
    }
    public function update(Request $request, Message $message) {
        //
    }
    public function destroy(Message $message) {
        //
    }
    public function messages() {
        $messages = Message::all();
        return view('messages.all', compact('messages'));
    }
}
