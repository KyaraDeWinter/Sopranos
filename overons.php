<?php include_once 'db.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- connection css -->
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- connection google fonts: Lato+Rock Salt -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <!-- connection font awesome: fav-icons -->
    <script src="https://kit.fontawesome.com/5b23f4b030.js" crossorigin="anonymous"></script>
    
    <link rel="icon" href="images/logo.png" type="image">
    <title>Sopranos Pizza | Verse Pizza Warm Thuisbezorgd | Bestel Nu! </title>
  </head>

  <header>
    <!-- landingspage: IMAGE+TITLE -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
              <li class="nav-item">
               <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Over Ons</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="contact.php">Contact</a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>

  <body>

  <?php
    $object = new db;
    $db = $object->connect();
    // print_r(PDO::getAvailableDrivers());
  ?>

    <!-- WELCOME -->
    <div id="welcome" class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="welcome-text">
                    <h1>Soprano's beste recepten elke dag vers bereid</h1>
                    <p>Door bij Sopranos een vers bereide pizza te bestellen maakt u een reis door Italie. Sopranos maakt gebruik van streekproducten om de locale oogst te promoten. Wij zijn trots op onze authentieke recepten en ervaring in de Italiaanse keuken. Wij willen u uitnodigen om u te wanen in het zonnige Napels, waar de pizza zijn eerste opkomst maakte.</p>
                    <p><i>Heeft u trek in Italiaanse specialiteiten zoals verse pizza en calzone, dan zit u goed bij Sopranos Pizza!</i></p>
                    <p>Buon Appetito!</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="zipcode">

                </div>
            </div>
        </div>
    </div>

<!-- footer -->
<div class="row footer">
<div class="col-12 col-md-4 footer-column">
      <div class="footer-titel">
        <h4>Openingstijden</h4>
      </div>
      <div class="footer-tekst">
      <p>U kunt nog een half uur voor sluitingstijd bij ons een maaltijd bestellen, telefonisch of online via de website. Op maandag en dinsdag zijn wij gesloten.</p>
      </div>
      <div class="openingstijden-tabel">
        <table>
          <tbody>
            <tr>
              <th>Maandag</th>
              <td>
                <div class="tijd">Gesloten</div>
              </td>
            </tr>
            <tr>
              <th>Dinsdag</th>
              <td>
               <div class="tijd">Gesloten</div>
              </td>
            </tr>
            <tr>
              <th>Woensdag</th>
              <td>
                <div class="tijd">17:00 - 22:00</div>
              </td>
            </tr>
            <tr>
              <th>Donderdag</th>
              <td>
                <div class="tijd">17:00 - 22:00</div>
              </td>
            </tr>
            <tr>
              <th>Vrijdag</th>
              <td>
                <div class="tijd">17:00 - 23:00</div>
              </td>
            </tr>
            <tr>
              <th>Zaterdag</th>
              <td>
                <div class="tijd">17:00 - 23:00</div>
              </td>
            </tr>
            <tr>
              <th>Zondag</th>
              <td>
                <div class="tijd">17:00 - 22:00</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
<div class="col-12 col-md-4 footer-column">
    <div class="footer-titel">
        <h4>Beschikbare betalingsopties</h4>
      </div>
      <div class="footer-tekst">
        <p>Wanneer u bij ons een maaltijd bestelt kunt u uit verschillende betalingsopties kiezen.</p>
      </div>
      <div class="betalingsopties-icons">
        <ul>
          <li>
            <i class="fas fa-credit-card"></i>
            <span>Contactloos</span>
          </li>
          <li>
            <i class="fas fa-coins"></i>
            <span>Contant</span>
          </li>
          <li>
            <i class="fab fa-ideal"></i>
            <span>IDeal</span>
          </li>
          </ul>
    </div>

</div>
<div class="col-12 col-md-4 footer-column">
      <div class="footer-titel">
        <h4>Contactgegevens</h4>
      </div>
      <div class="footer-tekst">
        <p>Neem contact met ons op via het contactformulier op de contactpagina of bel ons op werkdagen van 09.00 - 17.00 uur. Wij zullen zo spoedig uw vraag beantwoorden.</p>
        <p>Tel. Nijmegen: +31 612345678</p>
      </div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>