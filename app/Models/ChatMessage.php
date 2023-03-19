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
        'chat_id', 'sendable_id', 'sendable_type', 'receivable_type', 'receivable_id', 'content'
    ];
}
