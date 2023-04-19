<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id',
        'receiver_id',
    ];

    /**
     * Get the messages for the chat
     */
    public function messages()
    {
        return $this->hasMany(ChatMessage::class)->oldest();
    }
}
