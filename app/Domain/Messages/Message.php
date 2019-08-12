<?php

namespace App\Domain\Messages;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
