<?php require_once(APP_ROOT.'/views/backend/components/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= head() ?>
    <title>Admin panel | Login</title>
    <style>
        /* login form */
       .form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: #fff;
            --main-color: #323232;
            padding: 20px;
            background: #F3F3F3;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input:focus {
            border: 2px solid var(--input-focus);
        }

        .button-confirm {
            margin: 50px auto 0 auto;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
        }

        /* error message */
        .error {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            width: 320px;
            padding: 12px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: start;
            background: #EF665B;
            border-radius: 8px;
            box-shadow: 0px 0px 5px -3px #111;
        }

        .error__icon {
            width: 20px;
            height: 20px;
            transform: translateY(-2px);
            margin-right: 8px;
        }

        .error__icon path {
            fill: #fff;
        }

        .error__title {
            font-weight: 500;
            font-size: 14px;
            color: #fff;
        }

        .error__close {
            width: 20px;
            height: 20px;
            cursor: pointer;
            margin-left: auto;
        }

        .error__close path {
            fill: #fff;
        }
    </style>
</head>
<body>
    <?php if (isset($data['error']['cookiesError'])): ?>
        <?= cookieBanner(); ?>
    <?php endif; ?>

    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="mb-3">
            <?php if (isset($data['error']['invalidCredentials'])): ?>
                <?= errorMsg($data['error']['invalidCredentials']) ?>
            <?php endif; ?>
    
            <?php if (isset($data['error']['cookiesError'])): ?>
                <?= errorMsg($data['error']['cookiesError']) ?>
            <?php endif; ?>
        </div>

        <div>
            <form class="form" action="/pages/admin" method="post">
                <div class="title">Welcome,<br><span>sign up to continue</span></div>
                <input type="text" placeholder="Username" name="username" class="input">
                <input type="password" placeholder="Password" name="password" class="input">
                <button class="button-confirm">Let`s go →</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>