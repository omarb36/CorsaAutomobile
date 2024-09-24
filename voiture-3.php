<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CorsaAutomobile/style/style.css">
    <title>CorsaAutomobile / BMW</title>
</head>
<body>
    
<!-- BARRE DE NAVIGATION -->


<?php include 'components/navbar.html'; ?>


<!-- SECTION VOITURES -->

<main>

    <header class="voiture-3-header">

    <div class="button-voir-voiture">
            <form action="/CorsaAutomobile/voiture-2.php">
                <button class="voir-button"><img src="https://img.icons8.com/?size=100&id=7811&format=png&color=000000" alt=""> Voir Fiat</button>
            </form>
        </div>

        <div class="modele-1">
            <img class="image-voiture-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/BMW_E21_front_20080331.jpg/560px-BMW_E21_front_20080331.jpg" alt="">
            <h1 class="nom-modele-1">BMW Serie 3 (E21)</h1>
            <h2 class="annee-1">1975 - 1983</h2>
            <h3 class="productions-1">1364039 productions</h3>
            <p class="constructeur-1">2 constructeur</p>
        </div>

        <div class="modele-2">
        <img class="image-voiture-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/2016_BMW_7-Series_%28G11%29_sedan%2C_front_view.jpg/560px-2016_BMW_7-Series_%28G11%29_sedan%2C_front_view.jpg" alt="">
            <h1 class="nom-modele-2">BMW Serie 7</h1>
            <h2 class="annee-2">depuis 1977</h2>
            <h3 class="productions-2">999999 productions</h3>
            <p class="constructeur-2">2 constructeur</p>
        </div>

    </header>
</main>

<?php include 'components/footer.html'; ?>

</body>
</html>