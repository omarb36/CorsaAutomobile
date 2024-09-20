<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CorsaAutomobile / Accueil</title>
</head>
<body>
    <header>

        <video autoplay muted loop disablePictureInPicture id="background-video" controlsList="nodownload nofullscreen noremoteplayback">
            <source src="img/porsche.mp4" type="video/mp4">
        </video>

<!-- BARRE DE NAVIGATION -->

<?php include 'components/navbar.html'; ?>

<!-- HEADER -->

    <div class="container-parent">
        <div class="text-header">
            <h1>Bienvenue sur CorsaAutomobile.</h1>
            <p>votre plateforme dédiée à l'exploration <br> des plus grands constructeurs automobiles et leurs <br> modèles emblématiques.</p>
            <button id="button-decouvrir">Découvrir</button>
        </div>
    </div>

    </header>

<!-- SECTION CARTES -->

    <section id="section-cartes">

        <div class="text-bienvenue">
            <h1 class="h1-bienvenue">Veuillez choisir un constructeur :</h1>
        </div>

        <div class="container-cartes">
            <div class="api-constructeur">
            <a class="voiture-lien" href="voiture-1.php" name="voiture" type="text">
                <img src="img/1-renaultt.png" alt="Logo de Renault">
                <h1 class="nom">Renault</h1>
                <h2 class="creation">1899</h2>
                <h2 class="fondateur">Fernand et Marcel Renault</h2>
                <ul class="usines">
                    <li>Usines :</li>
                    <li>Palencia</li>
                    <li>Douai</li>
                    <li>Bursa</li>
                    <li>France</li>
                    <li >Sandouville</li>
                    <li>Dieppe</li>
                </ul>
                <h2 class="pays">Pays : France</h2>
                </a>
            </div>
            
            <div class="api-constructeur">
            <a class="voiture-lien" href="voiture-2.php" name="voiture" type="text" >
                <img src="https://logos-marques.com/wp-content/uploads/2021/02/Fiat-Logo-2006.png" alt="Logo de Fiat">
                <h1 class="nom">Fiat</h1>
                <h2 class="creation">1899</h2>
                <h2 class="fondateur">Giovanni Agnelli</h2>
                <ul class="usines">
                    <li>Usines :</li>
                    <li>Melfi</li>
                    <li>Betim</li>
                    <li>Palencia</li>
                    <li>Rangaojon</li>
                    <li>France</li>
                    <li>Cordoba</li>
                    <li>Nanjing</li>
                    <li>Kurla</li>
                    <li>Casablanca</li>
                </ul>
                <h2 class="pays">Pays : Italie</h2>
                </a>
            </div>        
       
            <div class="api-constructeur">
            <a class="voiture-lien" href="voiture-3.php" name="voiture" type="text" >
                <img src="img/2-bmw.png" alt="Logo de BMW">
                <h1 class="nom">Bmw</h1>
                <h2 class="creation">1916</h2>
                <h2 class="fondateur">Gustav Otto, Karl Rapp</h2>
                <ul class="usines">
                    <li>Usines :</li>
                    <li>Melfi</li>
                    <li>Allemagne</li>
                    <li>Dingolfing</li>
                </ul>
                <h2 class="pays">Pays : Allemagne</h2>
                </a>
            </div>
            
        </div>
    </section>

<!-- FOOTER -->

    <?php include 'components/footer.html'; ?>

<script src="main.js" defer></script>
</body>
</html>