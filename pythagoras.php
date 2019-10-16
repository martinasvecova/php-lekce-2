<?php
$a = 4;
$b= 6;
$obdelnikobsah = $a*$b;

?>

<p>
    <?php
    $strana = 6;
    $uhel = 60;
    $vyska = round ($strana*sin(deg2rad ($uhel)), 3);
    $trojuhelnikobsah = round($strana*$vyska/2);
    ?>
</p>


<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pytagoras zo Samosu</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="pythagoras.php">Pytagoras zo Samosu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Všetko je číslo - o Pytagorasovi a pytagorovcoch</h1>
            <p class="col-md-6">Pytagoras bol grécky matematik. Narodil sa okolo roku 580 pred n. l. Neznášal fazuľu, miloval trojuholníky a mnohí ho považujú za jedného z úplne najdôležitejších matematikov. Vieme o ňom len veľmi málo, teda okrem vety pomenovanej po ňom - známej Pytagorovej vete.</p>

            <img class="pythagoras" alt="pythagoras" src="pythagoras.jpg">

            <p><a class="btn btn-primary btn-lg" href=https://uzitocna.pravda.sk/skola/clanok/338354-ktore-cislo-je-vrazedne-a-preco/" role="button">Chcem vedieť viac &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <h1 class="display-3">Ako to funguje?</h1>

        <div class="alert alert-warning" role="alert">
            c2 = a2 + b2 - obsah štvorca zostrojeného nad preponou pravouhlého trojuholníka je rovný súčtu obsahov štvorcov zostrojených nad jeho odvesnami
        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Obdĺžnik</h2>
                <table class="table">
                    <tr>
                        <td>Strana A</td>
                        <td> <?php echo "$a cm"; ?> </td>
                    </tr>
                    <tr>
                        <td>Strana B</td>
                        <td> <?php echo "$b cm"; ?> </td>
                    </tr>
                    <tr>
                        <td>Obsah</td>
                        <td> <?php echo "$obdelnikobsah cm²"; ?> </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Trojuholník</h2>
                <table class="table">
                    <tr>
                        <td>Strana </td>
                        <td> <?php echo "$strana cm"; ?> </td>
                    </tr>
                    <tr>
                        <td>Uhol</td>
                        <td> <?php echo "$uhel °"; ?> </td>
                    </tr>
                    <tr>
                        <td>Výška</td>
                        <td> <?php echo "$vyska cm"; ?> </td>
                    </tr>
                    <tr>
                        <td>Obsah</td>
                        <td> <?php echo "$trojuhelnikobsah cm²"; ?> </td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->


</main>

<footer class="container">
    <p>&copy; PHP kurz 2019</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>