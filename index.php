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


<div class="container mt-3">
    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3">
            <h3>Åbningstider</h3>
                <p class="mb-0">Mandag</p>
                <p class="mb-0">Tirsdag</p>
                <p class="mb-0">Onsdag</p>
                <p class="mb-0">Torsdag</p>
                <p class="mb-0">Fredag</p>
                <p class="mb-0">Lørdag</p>
                <p class="mb-0">Søndag</p>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <h3>Info</h3>
            <p class="mb-0"><a>Om FriRUM</a></p>
            <p class="mb-0"><a>Kontakt</a></p>
            <p class="mb-0"><a>FAQ</a></p>
            <p class="mb-0"><a>Nyhedsbrev</a></p>
            <p class="mb-0"><a>Handelsbetingelser</a></p>
            <p class="mb-0"><a>Privatlivspolitik</a></p>
        </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div>
                    <h3>Adresse</h3>
                        <p class="mb-0">Adresse 10 ST</p>
                        <p class="mb-0">4200 Slagelse</p>
                        <br>
                        <p class="mb-0">CVR</p>
                        <p class="mb-0">Hoved Mail</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a class="navbar-brand me-3 p-2" href="index.php">
                    <img src="img/paere.jpg" alt="Logo" class="rounded-circle logo-img g-2 logo-style" style="width: 65px; height: 60px">
                </a>
            </div>
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
