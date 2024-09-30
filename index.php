<?php 
$apiUrl = "https://filrouge.uha4point0.fr/V2/car/constructeurs";
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$reponse = curl_exec($curl);

if ($reponse === false) {
    die("Erreur lors de l'appel de l'API : " . curl_error($curl));
}

curl_close($curl);

$constructeurs = json_decode($reponse, true);

$constructeursFiltre = array_filter($constructeurs, function($constructeur) {
    return in_array($constructeur["id"], ['1', '2', '4', '5', '6']);
});

$logoscostructeurs = [
    'Renault' => 'img/1-renaultt.png',
    'BMW'=> 'img/2-bmw.png',
    'Vauxhall'=> 'https://logo-marque.com/wp-content/uploads/2021/11/Vauxhall-Logo.png',
    'Fiat'=> 'https://logos-marques.com/wp-content/uploads/2021/02/Fiat-Logo-2006.png',
    'Honda'=> 'https://logo-marque.com/wp-content/uploads/2021/03/Honda-Logo.png'
];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CorsaAutomobile/style/style.css">
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

            <?php foreach ($constructeursFiltre as $constructeur) : ?>

            <a class="voiture-lien" href="voiture-1.php" name="voiture" type="text">
            <div class="api-constructeur">
                <img src="<?php echo $logoscostructeurs[$constructeur['nom']]; ?>" alt="Logo du constructeur">
                <h1 class="nom"><?php echo htmlspecialchars($constructeur['nom'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <h2 class="creation">Année de création : <?php echo htmlspecialchars($constructeur['creation'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <h2 class="fondateur">Fondataur(s) : <?php echo htmlspecialchars($constructeur['fondateur'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <h2 class="pays">Pays : <?php echo htmlspecialchars($constructeur['pays'], ENT_QUOTES, 'UTF-8'); ?></h2>
                </a>
            </div>
           
            <?php endforeach; ?>
        </div>
    </section>

<!-- FOOTER -->

    <?php include 'components/footer.html'; ?>

<script src="js/main.js" defer></script>
</body>
</html>