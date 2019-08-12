<div class="Accordion">
    @foreach($items as $item)
    <div>
        {{--<button onClick={(e) => props.open(e)}>{props.title}</button>--}}
        <button>{{ $item['title'] }}</button>
        <p>{{ $item['content'] }}</p>
    </div>
    @endforeach
</div>