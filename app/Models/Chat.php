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
        'user_id',
        'user_one_id',
        'user_two_id',
    ];

    /**
     * Get the messages for the chat
     */
    public function messages()
    {
        return $this->hasMany(ChatMessage::class)->oldest();
    }
}
