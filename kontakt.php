<?php
require_once __DIR__ . '/logistik/email_adressekontakt.php';
require_once __DIR__ . '/logistik/databaselogistik.php';
require_once __DIR__ . '/logistik/Databasetabelle.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/kontakt.css">
    <title>Kontaktieren sie uns </title>


</head>

<body>

    <img class="erstefoto" src="./image/foto3.jpg" alt="">

    <nav>

        <div>
            <img class="fotolog" src="./image/logo.jpg">
        </div>

        
        <a href="https://viktor-j2021.github.io/DigitalesUniversum/index.html">Home</a>
        <a href="https://viktor-j2021.github.io/DigitalesUniversum/Dienst.html">Dienst</a>
        <a href="https://viktor-j2021.github.io/DigitalesUniversum/Über-uns.html">Über uns</a>



        <a href="https://turbo-happiness-pjjrj9jr5gg72rgrv-8000.app.github.dev/kontakt.php" class="active">Kontakt</a>

    </nav>
    <br>
    <br>
    <br>

    <main>
        <h1 class="">Kontaktieren sie uns</h1>
        <section class="google-kontakt-message">

            <div class="google">
                <iframe class="google1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.12399053874!2d7.449668715086964!3d51.49259211960786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b919d39230d60f%3A0x8fd9c195ad02eddf!2sSignal%20Iduna%20Park!5e0!3m2!1sde!2sde!4v1655144005660!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="kontakt__list">
                <div class="kontakt__adresse">
                    <div class="adresa">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                        <div class="adresa-detail">email@email.com</div>
                    </div>
                </div>
                <div class="kontakt__adresse">
                    <div class="adresa">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Telefon</span>
                        <div class="adresa-detail">+49(163) 555-5555</div>
                    </div>
                </div>
                <div class="kontakt__adresse">
                    <div class="adresa">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aderesa</span>
                        <div class="adresa-detail">Strobelallee 50, 44139 Dortmund</div>
                    </div>
                </div>
            </div>

            <div class="message">


                <form action="https://turbo-happiness-pjjrj9jr5gg72rgrv-8000.app.github.dev/logistik/email_adressekontakt.php" method="post">


                    <input minlength="5" type="text" name="name" required placeholder="Vollständiger Name" class="text_color">
                    <input minlength="8" type="email" name="email" required placeholder="E-Mail" class="text_color">
                    <input pattern="[0-9]{6,15}" title="Geben Sie eine gültige Telefonnummer ein" type="tel" name="telefon" required placeholder="Kontakt.Tel 0-123-456" class="text_color">
                    <textarea  name="message" required placeholder="Nachricht eingeben" class="text_color" ></textarea>
                    <button type="submit" name="submit">E-MAIL SENDEN</button>


                </form>

                <?php
                echo $alert;
                ?>


            </div>
        </section>


        <div class="social-icons-kontakt">

            <a href="#">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="#">
                <i class="fab fa-github fa-2x"></i>
            </a>

    </main>

    <div class="footer">
        <footer>&copy; WebDesign Technology 2022</footer>
    </div>

    <script src="https://kit.fontawesome.com/dce4646cb6.js" crossorigin="anonymous"></script>





</body>

</html>
