<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChMessage as Message;
use App\Models\User;
use Chatify\Facades\ChatifyMessenger as Chatify;

class AdminChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch unique conversations based on 'from_id' and 'to_id'
        $conversations = Message::selectRaw('IF(from_id < to_id, from_id, to_id) as participant1, IF(from_id < to_id, to_id, from_id) as participant2')
            ->groupBy('participant1', 'participant2')
            ->get();

        foreach ($conversations as $conversation) {
            $conversation->participant1_name = $this->getParticipantName($conversation->participant1);
            $conversation->participant2_name = $this->getParticipantName($conversation->participant2);
        }
        // Loop through conversations and fetch messages for each conversation
        foreach ($conversations as $conversation) {
            $participant1 = $conversation->participant1;
            $participant2 = $conversation->participant2;

            // Fetch messages for this conversation
            $messages = Message::where(function ($query) use ($participant1, $participant2) {
                $query->where('from_id', $participant1)
                    ->where('to_id', $participant2);
            })->orWhere(function ($query) use ($participant1, $participant2) {
                $query->where('from_id', $participant2)
                    ->where('to_id', $participant1);
            })->orderBy('created_at')
                ->get();

            // Attach the messages to the conversation
            $conversation->messages = $messages;
        }

        return view('admin.pages.chatify_messages.index', compact('conversations'));
    }

    private function getParticipantName($participantId)
    {
        // Fetch participant's name based on the ID (you might need to modify this based on your user structure)
        return User::find($participantId)->name ?? 'Unknown';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function deleteMessage(Request $request)
    {
        $messageId = $request->input('message_id');
        
        $message = Message::where('id' , $messageId)->first();

        if (!$message) {
            return response()->json(['status' => 'error', 'message' => 'Message not found'], 404);
        }

        // Check if the authenticated user has permission to delete the message
        // You might need to add your own logic here

        $message->delete();
        toastr()->success('message' , 'Message deleted successfully');
        return response()->json(['status' => 'success', 'message' => 'Message deleted successfully']);
    }
}
