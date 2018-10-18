<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Workout log</title>
</head>

<body>
        
    <div class="container">
        <div class="row">
            <div class="col-1">
                <header>
                    <a href="index.html"><h1>Workout log</h1></a>
                </header>
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-1">
                <p>Välkommen till <span class="wl-text">WORKOUT LOG</span>. Stället där du enkelt kan hålla koll på alla
                    dina träningspass.</p>
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-1">
                <form name="login" action="index.php" method="POST">
                    <input type="text" name="username" placeholder="Användarnamn">
                    <input type="password" name="password" placeholder="Lösenord">
                    <button type="submit" name="login">Logga in</button>
                    <a href="newuser.html">Ny användare?</a>
                </form>
               
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
<?php
    include("includes/footer.php");
?>