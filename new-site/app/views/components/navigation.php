<?php function navigation() { ?>
    <nav class="navbar navbar-expand-lg container d-flex justify-content-between mt-md-3">
        <a class="navbar-brand" href="/">
            <img src="../../../assets/illustration//Selection_002.png" alt="brand logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars" style="color:#343a40; font-size:28px;"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex mx-0 my-3 p-0">
                <li class="nav-item list-unstyled my-auto"><a class="text-secondary" href="#">About Us</a></li>
                <li class="nav-item list-unstyled my-auto"><a class="text-secondary" href="#">Services</a></li>
                <li class="nav-item list-unstyled my-auto"><a class="text-secondary" href="#">Use Cases</a></li>
                <li class="nav-item list-unstyled my-auto"><a class="text-secondary" href="#">Pricing</a></li>
                <li class="nav-item list-unstyled my-auto"><a class="text-secondary" href="#">Blog</a></li>
            </ul>
            <button class="btn btn-outline-secondary">Request a quote</button>
        </div>
    </nav>
<?php } ?>