<?php

namespace App\Domain\Menu;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Menu\Menu;

class Link extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'url'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
