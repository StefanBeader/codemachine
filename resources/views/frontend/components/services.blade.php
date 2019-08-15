@php
$services = [
[
'icon' => 'data.svg',
'title' => "Web Applications",
'body' => 'Ease and speed up your business by automating the activities you\'ve worked on manually until now.'
],
[
'icon' => 'application.svg',
'title' => "Mobile Applications",
'body' => 'You have an idea for a mobile application we will help you to realize it.'
],
[
'icon' => 'web.svg',
'title' => "Wordpress",
'body' => 'Build your style and become aware with the help of a unique and high-quality website.'
]
];
@endphp
<section id="services" class="services">
    <div class="cm-container">
        <div class="header">
            <h3>What we do</h3>
            <h2>Services</h2>
        </div>
        <div class="services-items">
            @php
            $delay = 0;
            @endphp
            @foreach($services as $service)
            <div class="items animation fade-from-bottom {{ $delay !== 0 ? "delay-".$delay : "" }}">
                <div class="icon">
                    <img src="{{ asset('images/' . $service['icon']) }}" alt="" class="image-responsive" />
                </div>
                <h4>{{ $service['title'] }}</h4>
                <p>{{ $service['body'] }}</p>
            </div>
            @php($delay += 500)
            @endforeach
        </div>
    </div>
</section>