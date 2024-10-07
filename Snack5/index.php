<?php 
function isPalindrome($userWord) {
    $palindrome = false;
    if ($userWord == strrev($userWord)) {
        $palindrome = true;
    };

    return $palindrome;
}

$userWord = $GET_['userWord'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">

<h1 class="mt-5 text-primary">Scopriamo se è palindroma!</h1>
    
    <form class="form-control" action="" method="GET">

    <label class="label-form" for="userWord">Inserisci la parola da controllare</label>
    <input class="form-control " type="text" name="userWord">

    <button class="btn my-1 btn-primary btn-lg" type="submit">Controlla</button>
    <button class="btn my-1 btn-warning btn-lg" type="reset">Reset</button>

    </form>

    if(isPalindrome($userWord))
    


</div>
    
    
</body>
</html>