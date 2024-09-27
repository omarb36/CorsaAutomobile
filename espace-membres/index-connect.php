<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: connexion.php');
    exit();
}

$apiUrl = "https://filrouge.uha4point0.fr/V2/car/constructeurs";
$reponse = file_get_contents($apiUrl);
$constructeurs = json_decode($reponse, true);

$constructeursFiltre = array_filter($constructeurs, function($constructeur) {
    return in_array($constructeur["id"], ['1', '2', '5']);
});

$logoscostructeurs = [
    'Renault' => '../img/1-renaultt.png',
    'BMW'=> '../img/2-bmw.png',
    'Fiat'=> 'https://logos-marques.com/wp-content/uploads/2021/02/Fiat-Logo-2006.png'
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/loged.css">
    <title>Acceuil / CorsaAutomobile</title>
</head>
<body>

<header>
    <img class="bg-loged" src="../img/bg-loged.jpg" alt="">
    <?php include '../components/navbar-loged.php'?>
    
    <main>
        <div class="container">
            <h1>Ravi de te revoir <span class="span-user"><?php echo htmlspecialchars($_SESSION['pseudo']);?></span> !</h1>
            <p>Voici les modèles dernièrement ajouter :</p>
            <button id="button-voir">Voir</button>
        </div>
</header>

<section id="section-cartes">

<div class="text-bienvenue">
    <h1 class="h1-bienvenue">Liste des constructeurs :</h1>
</div>

<div class="container-cartes">

    <?php foreach ($constructeursFiltre as $constructeur) : ?>

    <a class="voiture-lien" href="voiture-1.php" name="voiture" type="text">
    <div class="api-constructeur">
        <img src="<?php echo $logoscostructeurs[$constructeur['nom']]; ?>" alt="Logo de Renault">
        <h1 class="nom"><?php echo htmlspecialchars($constructeur['nom'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <h2 class="creation">Année de création : <?php echo htmlspecialchars($constructeur['creation'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <h2 class="fondateur">Fondataur(s) : <?php echo htmlspecialchars($constructeur['fondateur'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <h2 class="pays">Pays : <?php echo htmlspecialchars($constructeur['pays'], ENT_QUOTES, 'UTF-8'); ?></h2>
        </a>
    </div>
    <?php endforeach; ?>
</div>
</section>

    </main>


    <script src="../main.js" defer></script>
</body>
</html>