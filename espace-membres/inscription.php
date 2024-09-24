<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/espace-membres.css">
    <title>CorsaAutomobile / Inscription</title>
</head>
<body>


<!-- BARRE DE NAVIGATION -->
<header>
<?php include '../components/navbar-inscription.html'; ?>


<!-- HEADER -->

<main>
    <div class="form-inscriptiion-container">
        <form action="../components/navbar-loged.php">
            <div class="box-1">
            <label for="pseudo">Pseudo : </label>
            <input type="text" id="pseudo">
            </div>
            
            <div class="box-2">
            <label for="email">Email : </label>
            <input type="text" id="email">
            </div>

            <div class="box-3">
            <label for="mdp">Mot de passe : </label>
            <input type="text" id="mdp">
            </div>

            <input placeholder="envoyer" type="submit" id="submit" name="button" >
        </form>
    </div>
</main>

</header>

</body>
</html>