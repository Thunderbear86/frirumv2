<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>FriRUM Kalender</title>

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


    <div class="position-relative pt-5">
        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img center-image pt-5">
        <img src="img/coverPH.jpg" alt="Cover Image Samarbejde" class="img-fluid pt-2">
        <div class="overlay-title">
            <h1 class="title">Kalender</h1>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="https://www.facebook.com/events/246794014652233/?ref=newsfeed">
                    <div class="card">
                        <img src="img/kalender/frirum.jpg" class="card-img-top" alt="FriRUM Lab Stuen TV åbning">
                        <div class="card-body">
                            <h5 class="card-title text-center pt-2">FriRUM Stuen TV åbner!</h5>
                            <p class="card-text m-3">Lørdag d. 3/6, fra kl. 10.00-16.00 byder FriRUM på kage, bobler og masser af kreativiteter!</p>
                            <p class="card-text m-3">Kom og vær med til at indvie vores nye lokaler!</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="https://www.facebook.com/events/222888443825590/?ref=newsfeed">
                    <div class="card">
                        <img src="img/kalender/sokrea.jpg" class="card-img-top" alt="FriRUM Lab Stuen TV SøndagsKREA">
                        <div class="card-body">
                            <h5 class="card-title text-center pt-2">SøndagsKREA for hele familien!</h5>
                            <p class="card-text m-3">Søndag d. 4/6, fra kl. 11.00-15.00 er der åbent værksted for alle!</p>
                            <p class="card-text m-3">Deltagelse er gratis,så kom og slip kreativiteten fri!</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="https://www.facebook.com/events/771077678075767/?ref=newsfeed">
                    <div class="card">
                        <img src="img/kalender/fyvaeBB.jpg" class="card-img-top" alt="FriRUM Lab Stuen TV Fyraftens Værksted">
                        <div class="card-body">
                            <h5 class="card-title text-center pt-2">FyraftensVÆRKSTED</h5>
                            <p class="card-text m-3">Fredag d. 9/6, fra kl. 16.00-19.00 ruller vi vores badgemaskiner frem og går på jagt efter motiver i gamle bøger og blade</p>
                            <p class="card-text m-3">Deltagelse fra 15 år - Pris 75kr.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="https://www.facebook.com/events/200054499640478/200054506307144/?ref=newsfeed">
                    <div class="card">
                        <img src="img/kalender/gaca.jpg" class="card-img-top" alt="FriRUM Lab Stuen TV Garn Cafe">
                        <div class="card-body">
                            <h5 class="card-title text-center pt-2">GarnCafé</h5>
                            <p class="card-text m-3">Mandag d. 12/6, fra kl. 14.00-17.00 kalder vi på alle gaarnglade nørklere!</p>
                            <p class="card-text m-3">GarnMama Elisabeth Skov Ursin er tovholder - Pris 30kr.</p>
                        </div>
                    </div>
                </a>
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
