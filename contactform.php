<?php

if (isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $onderwerp = $_POST['onderwerp'];
    $mailFrom = $_POST['mail'];
    $tekst = $_POST['tekst'];

    $mailTo = "";
    $headers = "From: ".$mailFrom; 
    $txt = "You have received an e-mail from ".$name.".\n\n".$tekst;

    mail($mailTo, $onderwerp, $txt, $headers);
    header("Location: contact.php?mailsend")
}