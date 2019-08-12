<header id="nav">
    <nav class="cm-container">
        <div class="logo">
            <a href="">
                <img src="{{ asset('images/cm-logo.svg') }}" class="image-responsive" alt=""/>
            </a>
        </div>
        <div class="nav-links">
            <ul class="large-nav">
                <li>
                    <a class="go-to" data-section="about" href="#">About</a>
                </li>
                <li>
                    <a class="go-to" data-section="services" href="#">Services</a>
                </li>
                <li>
                    <a class="go-to" data-section="outsourcing" href="#">Outsourcing</a>
                </li>
                <li>
                    <a class="go-to" data-section="contact" href="#">Contact</a>
                </li>
            </ul>
            <div class="cm-hamburger">
                <svg id="display" class="show" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 73.168 73.168"
                     style="enable-background:new 0 0 73.168 73.168;"
                     xml:space="preserve">
<g>
    <g id="Navigation">
        <g>
            <path d="M4.242,14.425h64.684c2.344,0,4.242-1.933,4.242-4.324c0-2.385-1.898-4.325-4.242-4.325H4.242
				C1.898,5.776,0,7.716,0,10.101C0,12.493,1.898,14.425,4.242,14.425z M68.926,32.259H4.242C1.898,32.259,0,34.2,0,36.584
				c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.933,4.242-4.325C73.168,34.2,71.27,32.259,68.926,32.259z
				 M68.926,58.742H4.242C1.898,58.742,0,60.683,0,63.067c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.935,4.242-4.325
				C73.168,60.683,71.27,58.742,68.926,58.742z"/>
        </g>
    </g>
</g>
</svg>
                <svg version="1.1" id="hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
<g>
    <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
		c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
		C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
		s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
</g>
</svg>

            </div>
        </div>
        <div class="mobile-nav-wrapper" id="mobile-nav">
            <div class="mobile-nav">
                <ul>
                    <li>
                        <a class="go-to" data-section="about" href="#">About</a>
                    </li>
                    <li>
                        <a class="go-to" data-section="services" href="#">Services</a>
                    </li>
                    <li>
                        <a class="go-to" data-section="outsourcing" href="#">Outsourcing</a>
                    </li>
                    <li>
                        <a class="go-to" data-section="contact" href="#">Contact</a>
                    </li>
                </ul>
                @include('frontend.components.contact_info')
            </div>
        </div>
    </nav>
</header>