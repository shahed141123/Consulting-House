<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Chatify\Traits\UUID;

class ChMessage extends Model
{
    use UUID;
    public function getSenderName()
    {
        return User::where('id', $this->from_id)->value('name');
    }
    public function getReceiverName()
    {
        return User::where('id', $this->to_id)->value('name');
    }
    // public function conversationMessages()
    // {
    //     return $this->hasMany(ChMessage::class, 'from_id', 'from_id')
    //         ->where('to_id', $this->to_id)
    //         ->orWhere(function ($query) {
    //             $query->where('from_id', $this->to_id)
    //                 ->where('to_id', $this->from_id);
    //         })
    //         ->orderBy('created_at');
    // }
}
