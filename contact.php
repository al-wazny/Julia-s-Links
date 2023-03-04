<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Terminanfrage</title>
    <style>
        body {
            background-color: #e6ab7c;
        }
        #contact main h1 {
            font-size: 4rem;
            margin-top: 0;
            margin-bottom: 1rem;
            padding-top: 3rem;
        }
        main > div {
            margin: 3rem .75rem;
        }
        .contact {
            color: white;
        }
        label,
        p,
        input {
            color: black;
        }
        form,
        section {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-top: .5rem;
            margin-bottom: .5rem;
        }
        select {
            height: 2.15rem;
        }

        form input:not(ul input) {
            display: block;
            height: 1.75rem;
        }
        form section {
            margin-bottom: 1rem;
        }
        form > label,
        section > label {
            font-weight: 600;
        }
        form ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }
        form ul input {
            width: auto;
            display: inline;
        }
        form ul label {
            width: 7.5rem;
            display: inline-block;
        }
        form .inspiration {
            margin-bottom: 1rem;
            margin-top: .5rem;
            font-size: 1.25rem;
            color: black;
            text-decoration: none;
        }
        form button {
            border-radius: 10px;
        }
        .file-upload {
            padding: .5rem 1rem;
            width: fit-content;
        }
        .submit-appointment {
            padding: 1rem;
        }
        .require-input {
            display: inline;
            background-color: transparent;
            color: red;
            box-shadow: none;
        }
        .additional-info-text {
            margin-top: .5rem;
            margin-bottom: 0;
            font-size: .8rem;
            font-weight: 300;
        }
    </style>
</head>
<body id="contact">
    <main>
        <div>
            <h1>Request an appointment</h1>
            <div class="contact">
                <form action="./contact.php" method="post">
                    <label for="name">Name <span class="require-input">*</span></label>
                    <section id="name">
                        <input type="text" name="firstName" id="firstName" require>
                        <p class="additional-info-text">First Name</p>
                        <input type="text" name="lastName" id="lastName" require>
                        <p class="additional-info-text">Last Name</p>
                    </section>

                    <section>
                        <label for="pronouns">Pronouns</label>
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
                        <label for="phoneNumber">Phone number <span class="require-input">*</span></label>
                        <input type="phone" name="phoneNumber" id="phoneNumber" pattern="[0-9]{1, 11}" require>
                    </section>

                    <section>
                        <label for="city">Which City do you come from?</label>
                        <input type="text" name="city" id="city">
                    </section>

                    <label for="design-type">Please choose</label>
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
                        <label for="tattoo-description">please describe your desired tattoo <span class="require-input">*</span></label>
                        <textarea name="tattoo-description" id="tattoo-description" cols="30" rows="6" require></textarea>
                        <a class="inspiration" href="./my-art.php">Do you need inspiration? Click here!</a>
                    </section>
                    
                    <section>
                        <label for="file">You can also send us self made motives!</label>
                        <input type="file" name="file" id="file" style="display: none;">
                        <button class="file-upload" type="button" onclick="getFile()">Browse Files</button>
                    </section>

                    <section>
                        <label for="body-part">Where on your body do you want the tattoo? <span class="require-input">*</span></label>
                        <input type="text" name="body-part" id="body-part" require>
                        <p class="additional-info-text">If you haven't decided yet - no problem! We'll figure it out on the appointment date</p>
                    </section>

                    <section>
                        <label for="tattoo-size">Desired size of the tattoo <span class="require-input">*</span></label>
                        <input type="number" name="tattoo-size" id="tattoo-size" require>
                        <p class="additional-info-text">Keep in mind that many tattoos need a minimum size. Again. We choose the perfect size of the tattoo on the appointment (after all, it should also fit your body)</p>
                    </section>

                    <section>
                        <label for="free-time">When do you have time? (day of the week, period of time)</label>
                        <textarea name="free-time" id="free-time" cols="30" rows="6"></textarea>
                        <p class="additional-info-text">=======JULIA GIBT AN WANN DU ARBEITEST======</p>
                    </section>

                    <section>
                        <label for="questions">Space for questions</label>
                        <textarea name="questions" id="questions" cols="30" rows="6"></textarea>
                    </section>

                    <button class="submit-appointment" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <?php include("./navigation.html"); ?>
</body>
<script>
    function getFile() {
        document.getElementById('file').click();
    }
</script>
</html>