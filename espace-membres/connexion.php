<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$messageErreur = ''; 

if (isset($_POST["connexion"])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']); 

        $checkUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkUser->execute(array($pseudo));

        if ($checkUser->rowCount() > 0) {
            $userInfo = $checkUser->fetch();
            
            if ($userInfo['mdp'] === $mdp) {
                $_SESSION['id'] = $userInfo['id'];
                $_SESSION['pseudo'] = $userInfo['pseudo'];

                header('Location: index-connect.php');
            } else {
                $messageErreur = 'Mot de passe incorrect. Veuillez réessayer.';
            }
        } else {
            $messageErreur = 'Pseudo incorrect. Veuillez réessayer.';
        }
    } else {
        $messageErreur = 'Veuillez compléter tous les champs.';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/espace-membres.css">
    <title>CorsaAutomobile / Connexion</title>
</head>
<body>

<!-- BARRE DE NAVIGATION -->
<header>
    <?php include '../components/navbar-inscription.html'; ?>


<!-- FORMULAIRE DE CONNEXION -->
<main class>
    <div class="form-connexion-container">
        <form method="POST" action="">
            <h1>Connexion</h1>
            <div class="box-1-connexion">
            <span class="message-erreur"><?php echo $messageErreur; ?></span>
                <label for="pseudo">Pseudo :</label>
                <input type="text" placeholder="Entrez votre pseudo" id="pseudo" name="pseudo" autocomplete="off">
            </div>

            <div class="box-2-connexion">
                <label for="mdp">Mot de passe :</label>
                <input type="password" placeholder="Entrez votre mot de passe" id="mdp" name="mdp" autocomplete="off">
            </div>

            <input value="Connexion" type="submit" id="submit" name="connexion">
        </form>
    </div>
</main>
</header>

</body>
</html>
