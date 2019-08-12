<?php

namespace App\Domain\Leads;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];
}
