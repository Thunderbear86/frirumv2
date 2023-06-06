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

    <div class="position-relative pt-5">
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image pt-5">
        <img src="img/coverPH2.jpg" alt="Cover Image Samarbejde" class="img-fluid pt-2">
        <div class="overlay-title">
            <h1 class="title">KreaKASSEN</h1>
        </div>
    </div>


    <!-- Krea Indhold-->

    <div class="container pt-5">
        <div class="row g-1">

        <div class="g-0 col-sm-12 col-md-4 col-lg-3">
                <div class="tile rounded-circle">
                    <div class="tile-image">
                        <img src="img/krea/krea1.jpg" alt="#">
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h3>GræskarHoveder</h3>
                            <p>FriRUM Lab viser dig her, hvordan du med genbrugsmaterialer, kan aktivere dig og dine børn kreativt.</p>
                        </div>
                </div>
        </div>

        <div class="g-0 col-sm-12 col-md-4 col-lg-3">
                <div class="tile rounded-circle">
                    <div class="tile-image">
                        <img src="img/krea/krea2.JPG" alt="#">
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h3>PapHoved</h3>
                            <p>FriRUM Lab viser dig her, hvordan du med genbrugsmaterialer, kan aktivere dig og dine børn kreativt.</p>
                        </div>
                </div>
        </div>

        <div class="g-0 col-sm-12 col-md-4 col-lg-3">
                <div class="tile rounded-circle">
                    <div class="tile-image">
                        <img src="img/krea/krea3.JPG" alt="#">
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h3>PapHoved</h3>
                            <p>FriRUM Lab viser dig her, hvordan du med genbrugsmaterialer, kan aktivere dig og dine børn kreativt.</p>
                        </div>
                </div>
        </div>

        <div class="g-0 col-sm-12 col-md-4 col-lg-3">
                <div class="tile rounded-circle">
                    <div class="tile-image">
                        <img src="img/krea/krea4.JPG" alt="#">
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h3>PapHoved</h3>
                            <p>FriRUM Lab viser dig her, hvordan du med genbrugsmaterialer, kan aktivere dig og dine børn kreativt.</p>
                        </div>
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
