<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/constructeurautomobile/style/style.css">
    <title>CorsaAutomobile / Renault</title>
</head>
<body>
    
<!-- BARRE DE NAVIGATION -->


<?php include 'components/navbar.html'; ?>


<!-- SECTION VOITURES -->

<main>

    

    <header class="voiture-1-header">

        <div class="modele-1">
            <img class="image-voiture-1" src="https://images.caradisiac.com/logos-ref/modele/modele--renault-megane-3/S0-modele--renault-megane-3.jpg" alt="">
            <h1 class="nom-modele-1">Mégane 3</h1>
            <h2 class="annee-1">2008 - 2016</h2>
            <h3 class="productions-1">4000000 productions</h3>
            <p class="constructeur-1">1 constructeur</p>
        </div>

        <div class="modele-2">
        <img class="image-voiture-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/R3_1.jpg/560px-R3_1.jpg" alt="">
            <h1 class="nom-modele-2">Mégane R3</h1>
            <h2 class="annee-2">1961 - 1962</h2>
            <h3 class="productions-2">351384 productions</h3>
            <p class="constructeur-2">1 constructeur</p>
        </div>

        <div class="modele-3">
        <img class="image-voiture-3" src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Renault_Laguna_III_Phase_I_front-1.JPG?uselang=fr" alt="">
            <h1 class="nom-modele-3">Laguna III</h1>
            <h2 class="annee-3">2007 - 2015</h2>
            <h3 class="productions-3">2738 productions</h3>
            <p class="constructeur-3">1 constructeur</p>
        </div>

        
        <div class="button-voir-voiture">
            <form action="/constructeurautomobile/voiture-2.php">
                <button class="voir-button">Voir Fiat<img src="https://img.icons8.com/?size=100&id=7789&format=png&color=000000" alt=""></button>
                
            </form>
        </div>

    </header>
</main>

<?php include 'components/footer.html'; ?>

</body>
</html>