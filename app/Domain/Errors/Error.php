<?php

namespace App\Domain\Errors;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $fillable = [
        'message',
        'code',
        'file',
        'line',
    ];
}
