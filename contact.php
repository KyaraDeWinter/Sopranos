<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- connectie css -->
<link rel="stylesheet" href="css/stylesheet.css">
<!-- connectie google fonts: Lato en Rock Salt -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
<!-- connectie font awesome: fav-icons -->
<script src="https://kit.fontawesome.com/5b23f4b030.js" crossorigin="anonymous"></script>

<!-- titel icon en titel -->
<link rel="icon" href="images/logo.png" type="image">
<title>Sopranos Pizza | Vers bereid uit eigen keuken | Bestel nu</title>
</head>
<body>

<header>
    <!-- landingspage: image en navigatiebar -->
    <section class="landing">
        <div class="landing-img">
            <div class="titel">
                <div class="titel-h1">
                <h1>Sopranos Pizza</h1>
                </div>
                <div class="titel-p">
                <p>De lekkerste pizza's warm thuisbezorgd</p>
                </div>
            </div>
        </div>
    </section> 

    <section class="navigatie">
      <div class="navbar">
        <ul>
          <li><a href="home.php #menukaart">Menukaart</a></li>
          <li><a href="home.php #overons">Over Ons</a></li>
          <li><a href="home.php">Home</a></li>
        </ul>
      </div>
    </section>
</header>

<!-- welkom tekst -->
<section class="welkom">
    <div class="tekst-welkom">
        <h1>Neem contact op bij vragen of opmerkingen</h1>
        <p>Heeft u vragen over allergenen in onze producten of wilt u reserveren voor een groep groter dan 8, neem contact op door het formulier in te vullen. Wij reageren zo spoedig mogelijk op uw vraag.</p>
    </div>

        <div class="postcode">
            <h3>Neem contact met ons op!</h3>
            <form class="contact-form" action="index.php" method="post">
                <input type="text" name="naam" placeholder="Volledige naam">
                <input type="text" name="mail" placeholder="Email adress">
                <input type="text" name="onderwerp" placeholder="Onderwerp">
                <textarea name="tekst" placeholder="Tekst" id="" cols="30" rows="10"></textarea>
                <button type="submit" name="submit">Verzend bericht</button>
            </form> 
        </div>
</section>

<hr>

<!-- welkom tekst -->
<section class="contact">
    <div class="contactgegevens">
        <h1>Contactgegevens Nijmegen</h1>
        <p>Grotestraat 147</p>
        <p>1234 AB Nijmegen</p>
        <p>Telefonisch bereikbaar op: +31 612345678</p>
        <p>Routebeschrijving</p>
    </div>

    <div class="contactgegevens">
        <h1>Contactgegevens Arnhem</h1>
        <p>Grotestraat 147</p>
        <p>1234 AB Arnhem</p>
        <p>Telefonisch bereikbaar op: +31 623456789</p>
        <p>Routebeschrijving</p>
    </div>

    <div class="contactgegevens">
        <h1>Contactgegevens Groesbeek</h1>
        <p>Grotestraat 147</p>
        <p>1234 AB Groesbeek</p>
        <p>Telefonisch bereikbaar op: +31 634567890</p>
        <p>Routebeschrijving</p>
    </div>
</section>

<!-- footer -->
<section id="footer" class="footer">
  <footer>
    <div class="openingstijden">
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

    <div class="betalingsopties">
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

    <div class="contactfooter">
      <div class="footer-titel">
        <h4>Contactgegevens</h4>
      </div>
      <div class="footer-tekst">
        <p>Neem contact met ons op via het contactformulier op de contactpagina of bel ons op werkdagen van 09.00 - 17.00 uur. Wij zullen zo spoedig uw vraag beantwoorden.</p>
        <p>Tel. Nijmegen: +31 612345678</p>
        <p>Tel. Arnhem: +31 623456789</p>
        <p>Tel. Groesbeek: +31 634567890</p>
      </div>
    </div>
  </footer>
</section>

</body>
</html>