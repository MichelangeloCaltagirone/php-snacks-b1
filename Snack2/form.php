<?php 

$userName = $_GET["userName"];
$userEmail = $_GET["userEmail"];
$userAge = $_GET["userAge"];



?>





<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <h2> Il nome utente è: <?= $userName ?> </h2>
    <h2> L'email utente è: <?= $userEmail ?> </h2>
    <h2> L'età utente è: <?= $userAge ?> </h2>

    
    
</body>
</html>