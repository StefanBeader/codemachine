<?php

namespace App\Domain\Menu;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Menu\Link;

class Menu extends Model
{
    protected $fillable = [
      'name',
    ];

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
