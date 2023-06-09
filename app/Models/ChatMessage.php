<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    /**
     * Fields that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'chat_id', 'sender_id','receiver_id', 'content'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function chat() {
        return $this->belongsTo(Chat::class);
    }
}
