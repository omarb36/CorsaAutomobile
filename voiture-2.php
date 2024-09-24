<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CorsaAutomobile/style/style.css">
    <title>CorsaAutomobile / Fiat</title>
</head>
<body>
    
<!-- BARRE DE NAVIGATION -->


<?php include 'components/navbar.html'; ?>


<!-- SECTION VOITURES -->

<main>

    

    <header class="voiture-2-header">

        <div class="button-voir-voiture">
            <form action="/CorsaAutomobile/voiture-1.php">
                <button class="voir-button"><img src="https://img.icons8.com/?size=100&id=7811&format=png&color=000000" alt="">Voir Renault</button>
            </form>
        </div>

        <div class="modele-1">
            <img class="image-voiture-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Grande_punto_5tuerer.jpg/560px-Grande_punto_5tuerer.jpg" alt="">
            <h1 class="nom-modele-1">Fiat Punto III</h1>
            <h2 class="annee-1">depuis 2005</h2>
            <h3 class="productions-1">1000000 productions</h3>
            <p class="constructeur-1">5 constructeur</p>
        </div>

        <div class="modele-2">
        <img class="image-voiture-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/1984_Fiat_Uno_70S_%2811599974013%29.jpg/560px-1984_Fiat_Uno_70S_%2811599974013%29.jpg" alt="">
            <h1 class="nom-modele-2">Fiat Uno</h1>
            <h2 class="annee-2">1983 - 2013</h2>
            <h3 class="productions-2">11000000 productions</h3>
            <p class="constructeur-2">5 constructeur</p>
        </div>

        <div class="button-voir-voiture">
            <form action="/CorsaAutomobile/voiture-3.php">
                <button class="voir-button">Voir BMW <img src="https://img.icons8.com/?size=100&id=7789&format=png&color=000000" alt=""> </button>
            </form>
        </div>

    </header>
</main>

<?php include 'components/footer.html'; ?>

</body>
</html>