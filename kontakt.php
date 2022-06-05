<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a193c7a199.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="./index.html">Startseite</a></li>
                <li><a href="./downloads.html">Downloads</a></li>
                <li><a href="#" class="aktiv">Kontakt</a></li>
            </ul>

            <ul>
                <li><a href=""><i class="fa-solid fa-heart-circle-plus"></i></a></li>
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
    <div class="container">
        <div style="text-align:center">
        <h2>Kontaktformular</h2>
        <p>Hinterlassen sie ihre Nachricht:</p>
    </div>

    <div class="row">
        <div class="column">
        <img src="./img/rhein-kreis-neuss.jpg" style="width:100%" height="89%">
    </div>

    <div class="column">
      <form action="/action_page.php">
      <label for="anrede">Anrede</label>
        <select id="anrede" name="anrede">
            <option value="auswahl">Bitte wählen</option>
            <option value="Frau">Frau</option>
            <option value="Herr">Herr</option>
        </select>
        <label for="fname">Vorname</label>
        <input type="text" id="fname" name="firstname" placeholder="Max">
        <label for="lname">Nachnahme</label>
        <input type="text" id="lname" name="lastname" placeholder="Mustermann">
        <label for="subject">Ihr Anliegen</label>
        <textarea id="subject" name="subject" placeholder="Bitte schildern Sie hier Ihr Anliegen mit Angabe des Themas" style="height:170px"></textarea>
        <input type="submit" value="Absenden">
      </form>
    </div>
  </div>
</div>
    </main>

    <footer>
        <div class="footer">
            <div class="row">
                <div class="support">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="">Downloads</a></li>
                        <li><a href="">Kontaktformular</a></li>
                    </ul>
                </div>

                <div class="rechtliches">
                    <h4>Rechtliches</h4>
                    <ul>
                        <li><a href="">AGB</a></li>
                        <li><a href="">Impressum</a></li>
                        <li><a href="">Datenschutz</a></li>
                    </ul>
                </div>

                <div class="social-media">
                    <h4>Social Media</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/metahellix"><i class="fa fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="copyright">
                    <h4>©2022 Ishak Ugurlu</h4>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>