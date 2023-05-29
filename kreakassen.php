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

<header>

    <!--Sticky top navbar -->

    <?php include 'menu.php'; ?>

</header>

<main>


    <!-- Hero Cover Image med CTA -->

    <div class="position-relative">
        <img src="img/coverPH.jpg" alt="Cover Image Kreakassen" class="img-fluid">
        <h1 class="title">KreaKASSEN</h1>
        <br>
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image">
    </div>


    <!-- Krea Indhold-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="img/krea/krea1.jpg" alt="#" class="img-thumbnail" style="border-color: $red">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1>TEST</h1>
                <p>Test test test test test test test test test</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1>TEST</h1>
                <p>Test test test test test test test test test</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="img/krea/krea2.JPG" alt="#" class="img-thumbnail">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="img/krea/krea3.JPG" alt="#" class="img-thumbnail">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="img/krea/krea4.JPG" alt="#" class="img-thumbnail">
            </div>

        </div>
    </div>


    <!-- Column indhold -->

    <div class="container">
        <h2 class="headline text-center" id="fuldkommen"></h2>
        <div class="col-sm-12 col-md-6 col-lg-4">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>

    <div class="container text-center">
        <h2 class="headline" id="gentleman">Om FriRUM</h2>
        <div class="col-sm-12 col-md-6 col-lg-4">Vores mission og værdier</div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>


</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
