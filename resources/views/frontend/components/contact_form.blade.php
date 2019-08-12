<div class="contact-form  animation fade-from-bottom">
    <form id="contact-message" action="#" method="POST">
        {{ csrf_field() }}
        <div class="cm-form-group">
            <input type="text" id="name" name="name" placeholder="Name" class="cm-form-control"/>
        </div>
        <div class="cm-form-group">
            <input type="email" id="email" name="email" placeholder="E-mail *"
                   class="cm-form-control"/>
        </div>
        <div class="cm-form-group">
            <textarea name="message" id="message" placeholder="Message *" class="cm-form-control"></textarea>
        </div>
        <div class="cm-form-group flex">
            <button type="submit" id="sendMessage">Send</button>
            <span id="responseMessage"></span>
        </div>
    </form>
</div>