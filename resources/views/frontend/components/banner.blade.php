<section class="banner">
    <div class="cm-container">
        <div class="banner-image">
            <img src="{{ asset('images/team-123.svg') }}" class="image-responsive" alt="group of people building application"/>
        </div>
        <div class="call-to-action animation fade-from-right">
            <h1>Let's Develop Your Next Great App!</h1>
            <p>Do you need a unique software solution for your company? We know how to help you!</p>
            <div class="call-to-action-buttons">
                <button class="cm-button go-to" data-section="contact">Get in touch</button>
                <button class="cm-button go-to" data-section="services">Learn more</button>
            </div>
        </div>
    </div>
    @php
        $sectionToGo = 'about'
    @endphp
    @include('frontend.components.scrollToNextSection', compact('sectionToGo'))
</section>