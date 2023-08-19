<?php function footer() { ?>
    <footer>
        <div class="container bg-dark d-flex flex-column">
            <div class="d-flex flex-column flex-lg-row justify-content-between">
                <div class="logo">
                    <img src="../../../assets/illustration/Selection_002.png" alt="">
                </div>
                <div class="footer-navigation d-flex align-items-center my-3">
                    <ul class="d-flex flex-column flex-lg-row list-unstyled my-4 my-lg-0">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Use Cases</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="social-icons d-flex align-items-center">
                    <ul class="d-flex list-unstyled my-auto">
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                </div>
            </div>
            <h4 class="m-0"><span>Contact us:</span></h4>
            <div class="row flex-column flex-lg-row mx-0">
                <div class="contact col-12 col-lg-6 p-0 mb-4 mb-lg-0">
                    <div class="contact-info">
                        <p>Email: info@positive.com</p>
                        <p>Phone: 555-567-8901</p>
                        <p>Address: 124 Main St <br> Moonstone City. Stardust State 12432</p>
                    </div>
                </div>
                <div class="newsletter-sub-form col-12 col-lg-6 d-flex align-items-center">
                    <div class="row m-0 w-100">
                        <div class="col">
                            <input class="form-control h-100" type="email" placeholder="Email" name="Email">
                        </div>
                        <div class="col">
                            <button class="btn btn-primary w-100">Subscribe to news</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex mb-0">
                <p class="mr-3">© 2023 Positivus. All Rights Reserved.</p>
                <p>Privacy Policy</p>
            </div>
        </div>
    </footer>
<?php } ?>