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
<title>Sopranos Pizza | Vers bereid uit eigen keuken | Bestel nu</title>
</head>
<body>

<?php
$object = new db;
$object->connect();
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
            <h4>Sopranos Pizza bezorgd in een aantal steden en omgeving van Rotterdam, Amsterdam en Utrecht.</h4>
            <form action="index.php" method="get">
                <!-- input van postcode, max 6 -->
                <input type="text" name="postcode" maxlength="6" class="input" placeholder="bijv. 1234AB">
                <input type="submit" name="check_postcode" class="button" value="Check Postcode">
            </form> 
        </div>
</section>

<!-- menukaart interactief -->
<section id="menukaart" class="menukaart">
    <div class="menukaart-tekst">
        <h4>Menukaart</h4>
        <p>Bestel nu onze overheerlijke pizza's, warm thuisbezorgd!</p>
    </div>
    <div class="menu">
    <?php
        
        $connect = mysqli_connect('localhost', 'root', '', 'sopranos');
        $query = 'SELECT * FROM menu ORDER by prijs ASC';
        $result = mysqli_query($connect, $query);

        if ($result) {
            if(mysqli_num_rows($result)>0) {
                while($product = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="card">
                        <form method="post" action="index.php?action=add%id=<?php echo $product['id']; ?>">
                        <div class="producten">
                            <h3 class="product"><?php echo $product['product']; ?></h3>
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
        }
    ?>
</div>

    <div class="border-wrapper">
        <div class="bestelling">
            <div class="order">
                <h3>Kies een van de lekkernijen en plaats uw bestelling!</h3>
            </div>
        </div>
    </div>

</section>

<!-- over ons tekst -->
<section id="overons" class="overons">
    <div class="overons-tekst">
        <h4>Over Ons</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nemo repellat eum ipsam quos itaque non tempora veritatis optio sequi velit hic dolorem quasi doloremque molestiae harum eaque nam saepe doloribus sapiente, enim voluptatum facilis minus blanditiis! Eaque eius ipsam doloribus. Iure error pariatur labore quisquam blanditiis modi est facere recusandae eveniet ullam possimus consequuntur minima, fugit fugiat beatae vel minus quibusdam eos corporis doloremque expedita!<br><br>Illum omnis libero mollitia temporibus, nobis, voluptate minima odio eum id ducimus ipsum, aliquid repudiandae sint amet. Accusantium fugiat deserunt dolore libero dolor aliquid, ab, labore rerum aspernatur minus veniam obcaecati eligendi porro mollitia?</p>
    </div>
</section>

<hr>

<!-- openingstijden tabel -->
<section id="openingstijden" class="openingstijden">
    <div class="openingstijden-tekst">
        <h4>Openingstijden</h4>
        <p>U kunt nog een half uur voor sluitingstijd bij ons een maaltijd bestellen, telefonisch of online via de website. Op maandag en dinsdag </p>
    </div>
    <div class="openingstijden-tabel"  style="text-align:center;">
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
</section>

<hr>

<section id="betalingsopties" class="betalingsopties">
    <div class="betalingsopties-tekst">
        <h4>Beschikbare betalingsopties</h4>
        <p>Wanneer u bij ons een maaltijd bestelt kunt u uit verschillende betalingsopties kiezen.</p>
    </div>
    <div class="betalingsopties-icons">
        <ul>
            <li>
                <i class="fas fa-credit-card"></i>
                <span>Contactloos betalen</span>
            </li>
            <li>
                <i class="fas fa-coins"></i>
                <span>Contant betalen</span>
            </li>
            <li>
                <i class="fab fa-ideal"></i>
                <span>Betalen via IDeal</span>
            </li>
        </ul>
    </div>
</section>

<section id="footer" class="footer">
    <div class="footer-lists">
        <footer>

        </footer>
    </div>
</section>

</body>
</html>