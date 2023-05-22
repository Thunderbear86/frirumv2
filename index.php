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

        <img src="img/Logo.png" alt="Overlay Image" class="img-fluid png-img pt-5 center-image">
    </div>

    <div class="container pt-5">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph3.jpeg" class="card-img-top" alt="You CAN">
                    <div class="card-body">
                        <h5 class="card-title">Tankemønstre</h5>
                        <p class="card-text">Bliv bevidst om dine tanker om dig selv og hvordan du kan programmere dig selv til succes!</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph2.jpeg" class="card-img-top" alt="Dumbbells">
                    <div class="card-body">
                        <h5 class="card-title">Styrke og Sundhed</h5>
                        <p class="card-text">Hvorfor styrketræning er for dig!</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph1.jpeg" class="card-img-top" alt="Barber">
                    <div class="card-body">
                        <h5 class="card-title">Selvpleje</h5>
                        <p class="card-text">Pas dig selv og skil dig ud!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="container pt-5">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph4.jpeg" class="card-img-top" alt="Code Of Conduct">
                    <div class="card-body">
                        <h5 class="card-title">Gentleman Kodeks</h5>
                        <p class="card-text">Er "lev og lad leve" nok?</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph5.jpeg" class="card-img-top" alt="Gentleman snak">
                    <div class="card-body">
                        <h5 class="card-title">Gentleman Snak</h5>
                        <p class="card-text">Åben snak om hverdagsemner</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                <div class="card">
                    <img src="img/ph1.jpeg" class="card-img-top" alt="Image description">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Card text</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="container">
        <h2 class="headline text-center" id="fuldkommen"></h2>
        <div class="col-sm-12 col-md-6 col-lg-4">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>

    <div class="container text-center">
        <h2 class="headline" id="gentleman">Gentleman Kodeks</h2>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>

    <div class="container text-center">
        <h2 class="headline" id="peer">Peer Talk</h2>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
        <div class="col-sm-12 col-md-6 col-lg-4"></div>
    </div>

</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>


</body>
</html>
