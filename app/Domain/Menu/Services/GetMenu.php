<?php

namespace App\Domain\Menu\Services;

use App\Domain\Menu\Menu;
use App\Domain\Menu\Services\ChildrenLinks;

class GetMenu
{
    public function get($name)
    {
        return Menu::where('name', $name)
            ->first()
            ->links()
            ->where('parent_id', null)
            ->get()
            ->map(function ($link) {
                return [
                    'parent' => $link,
                    'sublinks' => (new ChildrenLinks())->get($link->id)
                ];
        });
    }
}