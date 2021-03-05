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

<div class="container">
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
                        <div class="menu">
                            <h4 class="product"><?php echo $product['product']; ?></h4>
                            <h4>€ <?php echo $product['prijs']; ?></h4>
                            <input type="text" name="hoeveelheid" class="hoeveelheid" value="1">
                            <input type="hidden" name="product" value="<?php echo $product['product']; ?>">
                            <input type="hidden" name="prijs" value="<?php echo $product['prijs']; ?>">
                            <input type="submit" name="add_to_cart" class="add-button" value="Add To Cart">
                        </div>
                        </form>
                    </div>
                    <?php
                }
            }
        }
    ?>
</div>

</body>
</html>