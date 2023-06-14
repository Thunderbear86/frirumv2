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
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="FriRUM Lab">

    <!-- OG (Opgen Graph) SoMe deling -->

    <meta property="og:title" content="FriRUM Lab" />

    <meta property="og:type" content="website" />

    <meta property="og:url" content="http://www.thunder-bear.dk" />

    <meta property="og:image" content="https://www.thunderbear.dk/logo.jpg" />

    <meta property="og:description" content="FriRUM Lab - kreativitet for alle! Mød os i Vestsjællandscenteret" />

    <meta property="og:locale" content="da_DK" />

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
        <picture>
            <source type="image/webp" srcset="img/coverlanding.webp">
            <source type="image/jpeg" srcset="img/coverlanding.jpg">
            <img src="img/coverlanding.jpg" alt="Cover Image" class="img-fluid pt-2">
        </picture>
            <div class="overlay">
            <a href="kalender.php">
                <button class="btn-center">Kalender</button>
            </a>
        </div>
    </div>

    <!-- Samarbejdspratnere karoussel-->
    <div class="container p-3">
        <!-- <h2 class="text-center fw-bolder"><span class="orange">F</span>r<span class="blue">i</span><span class="green">R</span><span class="yellow">U</span><span class="red">M</span>s samarbejdspartnere</h2> -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/sam/VSCS.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>VestsjællandsCentret</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sam/SlagelseKommune.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slagelse Kommune</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sam/SlagelseKommune.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slagelse Kommune</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
