<?php require_once(APP_ROOT.'/views/backend/components/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= head() ?>
    <title>Admin panel</title>
    <style>
        label {
            margin-top: 1rem;
            margin-bottom: .25rem;
            font-size: 1.125rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?= navigation() ?>

    <main class="container d-flex flex-column mt-lg-5">
        <div>
            <div class="card p-4 mb-4">
                <h2>Introduction</h2>
                <div class="d-flex flex-column">
                    <label for="title">title</label>
                    <input type="text" name="title" id="title">
                    <label for="title">text</label>
                    <textarea rows="4" cols="50" name="content" id="content">
                    </textarea>
                    <label for="title">button</label>
                    <input type="text" name="btn-text" id="btn-text">
                    <label for="title">illustration</label>
                    <input type="file" accept="image/*" name="logo" id="logo">
                </div>
            </div>

            <div class="card p-4 mb-4">
                <h2 class="mb-3">Proposal</h2>
                <div class="card p-3 mb-3">
                    <h3>Propsal 01</h3>
                    <div class="d-flex flex-column">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title">
                        <label for="title">text</label>
                        <textarea rows="4" cols="50" name="content" id="content">
                        </textarea>
                        <label for="title">button</label>
                        <input type="text" name="btn-text" id="btn-text">
                        <label for="title">illustration</label>
                        <input type="file" accept="image/*" name="logo" id="logo">
                    </div>
                </div>
                <div class="card p-3">
                    <h3>Propsal 02</h3>
                    <div class="d-flex flex-column">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title">
                        <label for="title">text</label>
                        <textarea rows="4" cols="50" name="content" id="content">
                        </textarea>
                        <label for="title">button</label>
                        <input type="text" name="btn-text" id="btn-text">
                        <label for="title">illustration</label>
                        <input type="file" accept="image/*" name="logo" id="logo">
                    </div>
                </div>
            </div>

            <div class="card p-4 mb-4">
                <h2>Process</h2>
                <div class="card p-3">
                    <h3>Process 01</h3>
                    <div class="d-flex flex-column">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title">
                        <label for="title">text</label>
                        <textarea rows="4" cols="50" name="content" id="content">
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <?= var_dump($data) ?>
        <!-- sections to create configurations for:
            !TODO! change id and name of the input fields
         - general (logo, primary color, secondary color)
         - contactForm ??
         - service (title, link text, link)
         - footer (socials, email, phone number, address, links)-->
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>