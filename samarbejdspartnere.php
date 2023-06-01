<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>FriFRUM Samarbejde</title>

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


    <!--  Cover Image  -->

    <div class="position-relative pt-5">
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image pt-5">
        <img src="img/coverPH2.jpg" alt="Cover Image Samarbejde" class="img-fluid pt-2">
            <div class="overlay-title">
                <h1 class="title">Samarbejdspartnere</h1>
            </div>
    </div>

    <!-- Samarbejdspratnere karoussel-->
<div class="container p-3">
    <h2 class="text-center fw-bolder"><span class="orange">F</span>r<span class="blue">i</span><span class="green">R</span><span class="yellow">U</span><span class="red">M</span>s samarbejdspartnere</h2>
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

    <!-- Indhold-->

    <div class="container">
        <div class="row g-1">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-end">
                <div class="card">
                    <img src="img/sam/sam1.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sammen opnår vi mål</h5>
                        <p class="card-text">Se hvordan din virksomhed kan hjælpe</p>
                        <a href="#" class="btn btn-primary">Læs mere</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <img src="img/ph/samarbejde.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nyt liv til gamle materialer</h5>
                        <p class="card-text">Doner materialer til vores materialebank</p>
                        <a href="#" class="btn btn-primary">Læs mere</a>
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
