<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        main {
            background-color: black;
        }
        #contact main h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            padding-top: 3rem;
        }
        .contact {
            color: white;
        }
        form {
            display: flex;
            flex-direction: column;
            padding: 2rem;
        }
        form > input {
            margin-bottom: 1rem;
        }
        form > ul {
            list-style: none;
            padding-left: 0;
        }
        form .inspiration {
            margin-bottom: 1rem;
            color: white;
        }
        form button {
            height: 2rem;
            font-size: 1rem;
            border-radius: 20px;
        }
    </style>
</head>
<body id="contact">
    <main>
        <h1>Termin anfragen</h1>
        <div class="contact">
            <form action="./contact.php" method="post">
                <label for="name">Vorname, Nachname</label>
                <input type="text" name="name" id="name">
                <label for="email">email adresse</label>
                <input type="email" name="email" id="email">
                <label for="tel">telefon nummer</label>
                <input type="tel" name="tel" id="tel">
                <label for="body-part">Körperstelle</label>
                <input type="text" name="body-part" id="body-part">
                <label for="size">größe des motives in cm</label>
                <input type="number" name="size" id="size">
                <label for="motive">Beschreibung des gewünschten motives</label>
                <textarea name="motive" id="motive" cols="30" rows="10"></textarea>
                <ul>
                    <li>
                        <input type="checkbox" name="" id="dienstag">
                        <label for="dienstag">Dienstag</label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="mittwoch">
                        <label for="mittwoch">Mittwoch</label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="donnerstag">
                        <label for="donnerstag">Donnerstag</label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="freitag">
                        <label for="freitag">Freitag</label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="samstag">
                        <label for="samstag">Samstag</label>
                    </li>
                </ul>
                <ul>
                    <li>

                        <input type="radio" name="color" id="schwarz">
                        <label for="schwarz">Schwarz</label>
                    </li>
                    <li>
                        <input type="radio" name="color" id="farbig">
                        <label for="farbig">Farbig</label>
                    </li>
                </ul>
                <a class="inspiration" href="./my-art.php">Brauchst du inspiration? klick hier!</a>
                <label for="file">Kannst auch selbst gemachte motive schicken!</label>
                <input type="file" name="file" id="file">
                <button type="submit">Um termin bitten</button>
            </form>
        </div>
        <?php include("./navigation.html"); ?>
    </main>
</body>
</html>