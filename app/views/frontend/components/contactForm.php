<?php function contactForm() { ?>
    <div class="contact card flex-row p-lg-5">
        <div class="contact-form position-relative">
            <div class="contact-reason">
                <input type="radio" name="reason" id="say-hi">
                <label class="mr-4" for="say-hi">Say Hi</label>
                <input type="radio" name="reason" id="get-quote">
                <label for="say-hi">Get a Quote</label>
            </div>
            <div class="my-4">
                <div class="contact-info">
                    <div class="d-flex flex-column">
                        <label for="name">Name</label>
                        <input class="py-1" type="text" name="name" id="name">
                    </div>
                    <div class="d-flex flex-column my-3">
                        <label for="email">Email*</label>
                        <input class="py-1" type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="contact-message d-flex flex-column">
                    <label for="message">Message*</label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>
            </div>
            <button class="btn btn-dark w-100 py-2">Send message</button>
        </div>
        <div class="contact-illustration">
            <img class="h-100" src="../assets/illustration/Illustration3.png" alt="">
        </div>
    </div>
<?php } ?>