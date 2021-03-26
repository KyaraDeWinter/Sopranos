<?php
  include_once 'db.php';
?>

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
<title>Sopranos Pizza | Vers bereid uit eigen keuken | Bestel nu! </title>
</head>
<body>

<?php
  $object = new db;
  $db = $object->connect();
// print_r(PDO::getAvailableDrivers());
?>

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
          <li><a href="#menukaart">Menukaart</a></li>
          <li><a href="#overons">Over Ons</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </section>
</header>

<!-- welkom tekst -->
<section class="welkom">
    <div class="tekst-welkom">
        <h1>Soprano's beste recepten elke dag vers bereid</h1>
        <p>Door bij Sopranos een vers bereide pizza te bestellen maakt u een reis door Italie. Sopranos maakt gebruik van streekproducten om de locale oogst te promoten. Wij zijn trots op onze authentieke recepten en ervaring in de Italiaanse keuken. Wij willen u uitnodigen om u te wanen in het zonnige Napels, waar de pizza zijn eerste opkomst maakte.</p>
        <p><i>Heeft u trek in Italiaanse specialiteiten zoals verse pizza en calzone, dan zit u goed bij Sopranos Pizza!</i></p>
        <p>Buon Appetito!</p>
    </div>

        <div class="postcode">
            <h3>Check uw postcode en bestel!</h3>
            <h4>Sopranos Pizza bezorgd in een aantal steden en omgeving van Nijmegen, Arnhem en Utrecht.</h4>
            <form action="index.php" method="get">
                <!-- input van postcode, max 6 -->
                <input type="text" name="postcode" maxlength="6" class="input" placeholder="bijv. 1234AB">
                <input type="submit" name="check_postcode" class="button" value="Check Postcode">
            </form> 
        </div>
</section>

<hr>

<!-- menukaart interactief -->
<section id="menukaart" class="menukaart">
    <div class="menukaart-tekst">
        <h4>Menukaart</h4>
        <p>Bestel nu onze overheerlijke pizza's, warm thuisbezorgd!</p>
    </div>
    <div class="menu">
    <?php

        try {
            $stmt = $db->prepare("SELECT * FROM menu ORDER by prijs ASC");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
        //     var_dump($result);
        
        //    set the resulting array to associative
        //    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //    echo $v;
        //     }

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    
           if(count($result)>0) {
                foreach($result as $product){
                    ?>
                    <div class="card">
                        <form method="post" action="index.php?action=add%id=<?php echo $product['id']; ?>">
                        <div class="producten">
                            <h3 class="product"><?php echo $product["product"]; ?></h3>
                            <h5><?php echo $product['omschrijving']; ?></h5>
                            <h4>Vanaf € <?php echo $product['prijs']; ?></h4>
                            <input type="hidden" name="product" value="<?php echo $product['product']; ?>">
                            <input type="hidden" name="prijs" value="<?php echo $product['prijs']; ?>">
                            <input type="submit" name="add_to_cart" class="button" value="Add To Cart">
                        </div>
                        </form>
                    </div>
                    <?php
                }
            }
    ?>
</div>
</section>

<!-- shopping cart (order) -->
<section id="shoppingcart" class="shoppingcart">
      <div class="bestelling">
          <div class="shoppingcart-tekst">
              <h3>Kies een van de lekkernijen en plaats uw bestelling!</h3>
          </div>
      </div>
</section>

<hr>

<!-- over ons tekst -->
<section id="overons" class="overons">
    <div class="overons-tekst">
        <h4>Over Ons</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nemo repellat eum ipsam quos itaque non tempora veritatis optio sequi velit hic dolorem quasi doloremque molestiae harum eaque nam saepe doloribus sapiente, enim voluptatum facilis minus blanditiis! Eaque eius ipsam doloribus. Iure error pariatur labore quisquam blanditiis modi est facere recusandae eveniet ullam possimus consequuntur minima, fugit fugiat beatae vel minus quibusdam eos corporis doloremque expedita!<br><br>Illum omnis libero mollitia temporibus, nobis, voluptate minima odio eum id ducimus ipsum, aliquid repudiandae sint amet. Accusantium fugiat deserunt dolore libero dolor aliquid, ab, labore rerum aspernatur minus veniam obcaecati eligendi porro mollitia?</p>
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