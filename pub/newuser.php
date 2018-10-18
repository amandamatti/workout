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
                <p>Vill du skapa din egna träningsdagbok? Skapa en användare så är det bara
                    att börja logga dina träningspass direkt.</p>
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-1">
                <form name="register" class="register" method="POST">
                    <input type="text" name="firstname" id="firstname" placeholder="Förnamn" required>
                    <input type="text" name="lastname" id="lastname" placeholder="Efternamn" required>
                    <input type="text" name="email" id="email" placeholder="E-post" required>
                    <input type="text" name="username" id="username" placeholder="Användarnamn" required>
                    <input type="password" name="password" id="password1" placeholder="Lösenord" onkeyup="checkPass(); return false;"
                        required>
                    <button type="submit" name="submit">Registrera dig</button>
                    <div id="errormsg"></div>
                </form>

            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <footer>&copy Amanda Matti 2018</footer>
    </div> <!-- /container -->

</body>

</html>