<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dołaczanie pliku</title>
</head>
<body>
    <h4>Poczatek strony</h4>
    <?php
        //include include_once require require_once

        include "./skrypt/Lista.php";
        include_once "./skrypt/Lista.php";

        require "./skrypt/Lista.php";

        require_once "./skrypt/Lista.php";
    ?>
    <h4>Koniec strony</h4>
</body>
</html>