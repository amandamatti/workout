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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <title>Workout log</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1">
                <header>
                    <a href="index.html">
                        <h1>Workout log</h1>
                    </a>
                </header>
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-1">
                <p>Har du tränat?
                    Lägg till dina aktiviteter i listan så du
                    enkelt kan se statistik över dina pass.</p>
            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-1">
                <div class='postform'>
                    <h4>Lägg till pass:</h4>
                    <form method='post' action='mypage.html'>
                        <label for="date">Datum:</label>
                        <input type="date" name="date" placeholder="Datum">

                        <label for="activity">Aktivitet:</label>
                        <input type="text" name="activity" id="activity" placeholder="">

                        <!--Kanske kan ta number här istället för text-->
                        <label for="time">Aktivitetens längd:</label>
                        <input type="text" name="time" id="time" placeholder="10:06">

                        <label for="feeling">Känsla:</label>

                        <label>
                            <input type="radio" value="verybad" name="feeling" id="feeling" placeholder="Dåligt">
                            <i class="far fa-frown fa-2x"></i>
                        </label>

                        <label>
                            <input type="radio" value="bad" name="feeling" id="feeling" placeholder="Ganska dåligt">
                            <i class="far fa-meh fa-2x"></i>
                        </label>
                        <label>
                            <input type="radio" value="middle" name="feeling" id="feeling" placeholder="Sådärt">
                            <i class="far fa-meh-blank fa-2x"></i>
                        </label>
                        <label>
                            <input type="radio" value="good" name="feeling" id="feeling" placeholder="Bra">
                            <i class="far fa-smile fa-2x"></i>
                        </label>
                        <label>
                            <input type="radio" value="verygood" name="feeling" id="feeling" placeholder="Väldigt bra">
                            <i class="far fa-laugh fa-2x"></i>
                        </label>

                        <button type='submit' name='publish'>Publicera</button>
                    </form>
                </div>

            </div> <!-- /col-1 -->
        </div> <!-- /row -->
        <footer>&copy Amanda Matti 2018</footer>
    </div> <!-- /container -->
</body>

</html>