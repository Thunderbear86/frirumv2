<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>FriFRUM Lab</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<header class="pb-5">

<!--Sticky top navbar -->

    <?php include 'menu.php'; ?>

</header>

<main>


<!-- Hero Cover Image med CTA -->

    <div class="position-relative pt-5">
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image pt-5">
        <img src="img/ph/ph2.jpg" alt="Cover Image" class="img-fluid">
        <div class="overlay">
            <button style="--c: #ffffff;--b: 5px;--s:12px" class="btn-center">Kalender</button>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">
            <h3 class="text-center">Åbningstider</h3>
            <ul>
                <lo>Mandag</lo>
                <lo>Tirsdag</lo>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <h3 class="text-center">Info</h3>
            <ul>
                <a>Om FriRUM</a>
                <a>Kontakt</a>
                <a>FAQ</a>
                <a>Nyhedsbrev</a>
                <a>Handelsbetingelser</a>
                <a>Privatlivspolitik</a>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <h3 class="text-center">Adresse</h3>
            <div class="align-content-center">
                <ul>
                    <lo>Adresse 10 ST</lo>
                    <lo>4200 Slagelse</lo>
                    <br>
                    <lo>CVR</lo>
                    <lo>Hoved Mail</lo>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <img src="img/paere.jpg" alt="Logo" class="rounded-circle logo-img g-2 logo-style" style="width: 65px; height: 60px">
        </div>
    </div>
</div>

</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
