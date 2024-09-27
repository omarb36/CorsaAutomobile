<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/loged.css">
    <title>CorsaAutomobile / Vos Favoris</title>
</head>
<body>
    <heade class="header-favoris">
        <?php include 'components/navbar-favoris.php'?>
    </header>

    <main>
            <div class="text">
                <h1>Votre liste de voitures préférés :</h1>
            </div>

            <div class="favoris-container">
                <div class="api-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/2016_BMW_7-Series_%28G11%29_sedan%2C_front_view.jpg/560px-2016_BMW_7-Series_%28G11%29_sedan%2C_front_view.jpg" alt="">
                    <h1 class="nom">Bmw série 7</h1>
                    <h2 class="consctructeur">Bmw</h2>
                    <p class="annee">Depuis 1977</p>
                    <p class="productions">999999</p>
                    <ul class="usines">
                        <li>Allemagne</li>
                    </ul>
                <button class="delet-fav">Supprimer</button>
                </div>
            </div>
    </main>
</body>
</html>