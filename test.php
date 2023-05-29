<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>FriFRUM</title>

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

    <?php include 'menu.php'; ?>

</header>

<main>

    <div class="position-relative">
        <img src="img/coverPH.jpg" alt="Cover Image" class="img-fluid">
        <div class="overlay">
            <h2 class="title">Se Vores Kalender!</h2>
            <button class="btn btn-primary btn-lg btn-center">Se Vores Kalender</button>
        </div>
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image">
    </div>

    <!-- Grid Masonry Column -->

    <div class="container-fluid lp1">
        <div class="row lprow">
            <div class="col text-center">
                <h1 class="otext">
                    Åben Workshop
                </h1>
                <p class="otext">
                    Gratis tilmelding for alle.
                </p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-0 g-1">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card position-relative">
                    <img src="img/ph/ph5.JPG" class="card-img-top img-fluid" id="krea" alt="kreaKassen">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">KreaKassen</h5>
                        <p class="card-text">Bliv inspireret til kreativitet</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="card position-relative">
                    <img src="img/ph/workshop.JPG" class="card-img-top" alt="workshop">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Workshops</h5>
                        <p class="card-text">Lær nye færdigheder på dine præmisser</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card position-relative">
                    <img src="img/ph/produkter.jpg" class="card-img-top" alt="produkter">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Produkter</h5>
                        <p class="card-text">Se vores udvalg af kreationer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card position-relative">
                    <img src="img/ph/ph6.JPG" class="card-img-top" alt="teambuilding">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Teambuilding</h5>
                        <p class="card-text">Styrk jeres sammenhold, gennem sjove og kreative udfordringer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card position-relative">
                    <img src="img/ph/samarbejde.JPG" class="card-img-top" alt="samarbejde">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Samarbejde</h5>
                        <p class="card-text">Hvem er vores samarbejdspartnere og hvordan kan du indgå i et bæredygtigt samarbejde</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="card position-relative">
                    <img src="img/ph/frivillig.jpg" class="card-img-top" alt="frivillig">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Bliv Frivillig</h5>
                        <p class="card-text">Er du engageret og brænder du for, at dele ud af din viden og dine evner?</p>
                    </div>
                </div>
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






    <div class="container">
        <h2 class="headline text-center" id="#"></h2>
        <div class="col-sm-12 col-md-6 col-lg-4">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>

    <div class="container text-center">
        <h2 class="headline" id="#">Om FriRUM</h2>
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
