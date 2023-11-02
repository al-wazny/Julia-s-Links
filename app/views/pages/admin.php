<?php require_once(APP_ROOT.'/views/backend/components/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= head() ?>
    <script src="https://unpkg.com/vue@3.0.2"></script>
    <title>Admin panel</title>
    <style>
        label {
            margin-top: 1rem;
            margin-bottom: .25rem;
            font-size: 1.125rem;
            font-weight: 500;
        }
        select {
            height: 1.9rem;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <?= navigation() ?>
    <div class="container text-right">
        <form action="/language/choose">
            <select name="language" id="language">
                <?php foreach ($data['lang'] as $lang ): ?>
                    <option value="<?= $lang['language_id'] ?>" <?= $_COOKIE['lang'] == $lang['language_id'] ? 'selected' : '' ?> ><?= $lang['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Choose language</button>
        </form>
    </div>

    <main class="container d-flex flex-column mt-lg-5" id="app">
        <h1>{{ title }}</h1>
        <div>
            <form action="/Language/save">
                <div class="card p-4 mb-4">
                    <h2>Introduction</h2>
                    <div class="d-flex flex-column">
                        <label for="title">title</label>
                        <input type="text" name="title_08c71152-7234-42e7-b094-f510ff44e9cb" id="title">
                        
                        <label for="title">text</label>
                        <textarea rows="4" cols="50" name="content_08c71152-7234-42e7-b094-f510ff44e9cb" id="content"></textarea>
                        
                        <label for="title">button</label>
                        <input type="text" name="btn_08c71152-7234-42e7-b094-f510ff44e9cb" id="btn-text">
                        
                        <label for="title">illustration</label>
                        <input type="file" accept="image/*" name="logo_08c71152-7234-42e7-b094-f510ff44e9cb" id="logo">

                        <input class="mt-3" type="submit" value="save">
                    </div>
                </div>
            </form>

            <div class="card p-4 mb-4">
                <h2 class="mb-3">Proposal</h2>
                <div class="components">
                    <div class="card p-3 mb-3">
                        <h3 class="component-name">Proposal 01</h3>
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
                
                <button class="mt-3" @click='addElement'>add element</button>
            </div>

            <div class="card p-4 mb-4">
                <h2>Process</h2>
                <div class="components">
                    <div class="card p-3 mb-3">
                        <h3 class="component-name">Process 01</h3>
                        <div class="d-flex flex-column">
                            <label for="title">title</label>
                            <input type="text" name="title" id="title">
                            <label for="title">text</label>
                            <textarea rows="4" cols="50" name="content" id="content">
                            </textarea>
                        </div>
                    </div>
                </div>
                <button class="mt-3" @click='addElement'>add element</button>

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
    <script src="/app/views/backend/main.js"></script>
</body>
</html>