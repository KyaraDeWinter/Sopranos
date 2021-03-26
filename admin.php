<?php
    include_once 'db.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- connectie css -->
<link rel="stylesheet" href="css/styleadmin.css">
<!-- connectie google fonts: Lato en Rock Salt -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
<!-- connectie font awesome: fav-icons -->
<script src="https://kit.fontawesome.com/5b23f4b030.js" crossorigin="anonymous"></script>

<!-- titel icon en titel -->
<link rel="icon" href="images/logo.png" type="image">
<title>Sopranos Pizza | Admin </title>
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
            <div class="loginadmin">
                <h1>Sopranos Pizza</h1>
                <h3>Log in met uw werknemersgegevens</h3>
                    <form action="admin.php" method="get">
                        <input type="text" name="gebruikersnaam" class="input" placeholder="gebruikersnaam">
                        <input type="password" name="wachtwoord" class="input" placeholder="wachtwoord">
                        <input type="submit" name="check_user" class="button" value="login">
                    </form> 
            </div>
        </div>
    </section> 
</header>

</body>
</html>