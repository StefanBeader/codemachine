<?php

namespace App\Domain\Menu\Services;

use App\Domain\Menu\Link;

class ChildrenLinks
{

    public function get($id)
    {
        return Link::where('parent_id', $id)
            ->orderBy('order', 'asc')
            ->get()
            ->toArray();
    }
}