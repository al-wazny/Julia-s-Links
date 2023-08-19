<?php require_once(APP_ROOT.'/views/components/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= head() ?>
    <title>Home-page</title>
</head>
<body>
    <?= navigation() ?>
    <main class="container d-flex flex-column mt-lg-5">
        <section id="introduction">
            <?= introduction() ?>
        </section>
        <section id="proposal">
            <?= proposal() ?>
        </section>
        <section id="contact">
            <h3>Contact Us</h3>
            <?= contactForm() ?>
        </section>
        <section id="processes">
            <h3>Our Working Process</h3>
            <div id="work-process-container">
                <?= process('collapseOne', 'headingOne', '01', 'Consultation', 'During the initial consultation, we will discuss your business goals and objectives, target audience, and current marketing efforts. This will allow us to understand your needs and tailor our services to best fit your requirements.') ?>
                <?= process('collapseTwo', 'headingTwo', '02', 'Research and Strategy Development', 'During the initial consultation, we will discuss your business goals and objectives, target audience, and current marketing efforts. This will allow us to understand your needs and tailor our services to best fit your requirements.') ?>
            </div>
        </section>
        <section id="services">
            <h3>Services</h3>
            <div class="row">
                <?= service('Search engine optimization') ?>
                <?= service('Search engine optimization') ?>
                <?= service('Search engine optimization') ?>
                <?= service('Search engine optimization') ?>
            </div>
        </section>
    </main>
    <?= footer() ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>