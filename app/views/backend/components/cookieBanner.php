<?php function cookieBanner() { ?>
    <div class="fixed-bottom p-2">
        <div class="toast bg-dark text-white w-100 mw-100 fade show" role="alert" data-autohide="false">
            <div class="container toast-body p-4 d-flex flex-column">
                <h4>Cookie Warning</h4>
                <p>This website stores data such as cookies to enable site functionality including analytics and personalization. By using this website, you automatically accept that we use cookies. </p>
                <div class="ml-auto">
                    <button type="button" class="btn btn-outline-light mr-3" id="btnDeny">
                        Deny
                    </button>
                    <button type="button" class="btn btn-light" id="btnAccept">
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>