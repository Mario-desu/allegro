<?php 
include 'contactform.php'; // für E-mail-Versand
// ini_set('display_startup_errors',1);
// ini_set('display_errors',1);
// error_reporting(E_ALL);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Allegro Touristik</title>
    <meta
      name="description"
      content="Allegro Touristik - Tourismus heiter und beschwingt erleben"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/3543c7cdbb.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"
          ><img src="images/Logopit_1611437685824.png"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >HOME</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="angebot.html">ANGEBOT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ueber-uns.html">ÜBER UNS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">KONTAKT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--alert message start -->
    <?php echo $alert; ?>
    <!--alert message end -->


    <!--Formular-->
    <section class="main kontakt">
      <form method="POST" action="contactform.php" class="container">
        <h1>Kontakt</h1>
        <br>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">
            <b>Name</b>
          </label>
          <input
            type="text"
            class="form-control shadow-sm"
            id="exampleFormControlInput1"
            placeholder="Ihr Name"
            name="name"
          />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">
            <b>Email</b>
          </label>
          <input
            type="email"
            class="form-control shadow-sm"
            id="exampleFormControlInput1"
            placeholder="name@example.com"
            name="email"
          />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">
            <b>Betreff</b>
          </label>
          <input
            type="text"
            class="form-control shadow-sm"
            id="exampleFormControlInput1"
            placeholder="Betreff"
            name="betreff"
          />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">
            <b>Ihre Nachricht</b>
            </label>
          <textarea
            class="form-control shadow-sm"
            id="exampleFormControlTextarea1"
            rows="6"
            name="message"
          ></textarea>
        </div>
        <div class="col-auto">
          <button type="submit" name="submit" class="btn btn-primary mb-3 shadow-sm">Senden</button>
        </div>
      </form>
    </section>
    <!----------Footer-------------------->
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-left">
            <ul class="2fa-ul">
              <li>Allegro Touristik</li>
              <li>Marktgasse 6</li>
              <li>1090 Wien</li>
              <li><i class="fas fa-phone-square-alt"></i> +43 660 1234 660</li>
              <li><i class="fas fa-envelope"></i> wien@allegrotouristik.at</li>
            </ul>
          </div>
          <div class="col-md-2 offset-md-3 footer-right">
            <ul>
              <a href="kontakt.php"><li>Kontakt</li></a>
              <a href="impressum.html"><li>Impressum</li></a>
              <a href="datenschutz.html"><li>Datenschutz</li></a>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
