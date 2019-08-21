<ul class="first-level">
    @php
        $menu = new \App\Domain\Menu\Services\GetMenu();
        $links = $menu->get('sidemenu-admin');
    @endphp
    @foreach($links as $link)
    <li>
        <a href="" class="link" data-sublinks="{{ json_encode($link['sublinks']) }}" data-id="{{ $link['parent']->id }}">
            <span class="icon">
                <i class="{{ $link['parent']->icon }}"></i>
            </span>
            <span class="title">{{ $link['parent']->title }}</span>
        </a>
    </li>
    @endforeach
</ul>