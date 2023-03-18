<?php
if(!isset($_COOKIE['lang'])) {
    $_COOKIE['lang'] = 'deutsch';
}

if($_COOKIE['lang'] === 'deutsch') {    
    $filedata = file_get_contents('../../assets/translation/de-DE.json');
} else {
    $filedata = file_get_contents('../../assets/translation/en-GB.json');
}

$translation = json_decode($filedata)->contact;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <link rel="stylesheet" href="../../assets/styles/contact.css">
    <title>Terminanfrage</title>
</head>
<body id="contact">
    <main>
        <div>
            <h1><?= $translation->appointment ?></h1>
            <div class="contact">
                <form action="./contact-handler.php" method="post">
                    <label for="name">Name <span class="require-input">*</span></label>
                    <section id="name">
                        <input type="text" name="firstName" id="firstName" require>
                        <p class="additional-info-text"><?= $translation->firstName ?></p>
                        <input type="text" name="lastName" id="lastName" require>
                        <p class="additional-info-text"><?= $translation->lastName ?></p>
                    </section>

                    <section>
                        <label for="pronouns"><?= $translation->pronouns ?></label>
                        <select name="pronouns" id="pronouns">
                            <option value="Mr.">Mr.</option>
                            <option value="Mr.">Mrs.</option>
                            <option value="Mx.">Mx.</option>
                        </select>
                    </section>

                    <section>
                        <label for="email">E-Mail <span class="require-input">*</span></label>
                        <input type="email" name="email" id="email" require>
                    </section>

                    <section>
                        <label for="phoneNumber"><?= $translation->phoneNumber ?><span class="require-input">*</span></label>
                        <input type="phone" name="phoneNumber" id="phoneNumber" pattern="[0-9]{1, 11}" require>
                    </section>

                    <section>
                        <label for="city"><?= $translation->clientLocation ?></label>
                        <input type="text" name="city" id="city">
                    </section>

                    <label for="design-type"><?= $translation->choose ?></label>
                    <section id="design-type">
                        <ul>
                            <li>
                                <label for="wannado">Wannado</label>
                                <input type="radio" name="color" id="wannado" value="wannado">
                            </li>
                            <li>
                                <label for="custom-design">Custom Design</label>
                                <input type="radio" name="color" id="custom-design" value="Custom Design">
                            </li>
                        </ul>
                    </section>

                    <section>
                        <label for="tattoo-description"><?= $translation->tattooDescription ?> <span class="require-input">*</span></label>
                        <textarea name="tattoo-description" id="tattoo-description" cols="30" rows="6" require></textarea>
                        <a class="inspiration" href="./my-art.php"><?= $translation->needInspiration ?></a>
                    </section>
                    
                    <section>
                        <label for="file"><?= $translation->clientMotive ?></label>
                        <input type="file" name="file" id="file" style="display: none;">
                        <button class="file-upload" type="button" onclick="getFile()">Browse Files</button>
                    </section>

                    <section>
                        <label for="body-part"><?= $translation->tattooPlacement ?> <span class="require-input">*</span></label>
                        <input type="text" name="body-part" id="body-part" require>
                        <p class="additional-info-text"><?= $translation->tattooPlacementUnknown ?></p>
                    </section>

                    <section>
                        <label for="tattoo-size"><?= $translation->tattooSize ?> <span class="require-input">*</span></label>
                        <input type="number" name="tattoo-size" id="tattoo-size" require>
                        <p class="additional-info-text"><?= $translation->tattooPerfectSize ?></p>
                    </section>

                    <section>
                        <label for="free-time"><?= $translation->freeTime ?></label>
                        <textarea name="free-time" id="free-time" cols="30" rows="6"></textarea>
                        <p class="additional-info-text"><?= $translation->additionalInfo ?></p>
                    </section>

                    <section>
                        <label for="questions"><?= $translation->questionSpace ?></label>
                        <textarea name="questions" id="questions" cols="30" rows="6"></textarea>
                    </section>

                    <button class="submit-appointment" type="submit"><?= $translation->submit ?></button>
                </form>
            </div>
        </div>
    </main>
    <?php include("./pagelets/navigation.php"); ?>
</body>
<script>
    function getFile() {
        document.getElementById('file').click();
    }
</script>
</html>