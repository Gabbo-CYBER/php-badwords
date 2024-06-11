<?php

$nome = $_GET["nome"] ?? "Utente";
$cognome = $_GET["cognome"] ?? "Anonimo";


$msg = "Hello, $nome $cognome";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP World</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h1><?= $msg; ?></h1>

</body>

</html>