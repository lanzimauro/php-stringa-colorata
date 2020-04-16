<!-- Stampare una stringa verde se la variabile password passata in GET
è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->

<?php

    $password = $_GET['password'];

    if ($password == 'Boolean') {
        echo "<span style=\"color:green\">" . 'La Password inserita è corretta' . "</span>";
    } else {
        echo "<span style=\"color:red\">" . 'La password inserita è sbagliata' . "</span>";
    };

 ?>
