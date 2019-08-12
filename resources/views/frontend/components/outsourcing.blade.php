@php
$items = [
[
'title' => "Skilled Professionals",
'content' => 'Serbia prides itself on a strong mathematical and
logical background which permeates the culture and is reflected in the education system.'
],
[
'title' => "Western culture",
'content' => 'The people of Serbia have a strong understanding of western culture,
both on a personal and business level,
thus making written and verbal communication a much more enjoyable experience.'
],
[
'title' => "High English Proficiency",
'content' => 'The English language is mandatory through the Serbian schooling system
for at least eight years, and English language media is widespread in Serbian society.'
]
];
@endphp
<section id='outsourcing' class="outsourcing">
    <div class="cm-container">
        <div class="image">
            <img src="{{ asset('images/3-outsourcing-final-123.svg') }}" class="image-responsive" alt=""/>
        </div>
        <div class="content animation fade-from-right">
            <h3>Why chose us</h3>
            <h2>Outsourcing</h2>
            @include('frontend.components.accordion', compact('items'))
        </div>
    </div>
</section>