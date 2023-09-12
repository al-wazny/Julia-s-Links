<?php function service(string $title) { ?>
    <div class="services mb-4 col-12 col-md-6">
        <div class="service card flex-row p-4">
            <div class="info-text w-50 d-flex flex-column justify-content-between">
                <h4><span><?= $title ?></span></h4>
                <div class="d-flex">
                    <img src="../assets/illustration/Icon.png" alt="">
                    <p class="ml-2 my-auto text-center">Learn more</p>
                </div>
            </div>
            <div class="w-50 d-flex align-items-center justify-content-center">
                <img src="../assets/illustration/tokyo-magnifier-web-search-with-elements 2.png" alt="">
            </div>
        </div>
    </div>
<?php } ?>