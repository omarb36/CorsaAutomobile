<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$messageErreur = ''; 

if (isset($_POST["envoi"])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $checkUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkUser->execute(array($pseudo));

        if ($checkUser->rowCount() == 0) {
            $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp) VALUES(?, ?)');
            $insertUser->execute(array($pseudo, $mdp));

            $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
            $recupUser->execute(array($pseudo, $mdp));

            if ($recupUser->rowCount() > 0) {
                $userInfo = $recupUser->fetch();
                $_SESSION['id'] = $userInfo['id'];
                $_SESSION['pseudo'] = $userInfo['pseudo'];

                header('Location: index-connect.php');
            }
        } else {
            $messageErreur = 'Ce pseudo est déjà utilisé. Veuillez en choisir un autre.';
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
    <title>CorsaAutomobile / Inscription</title>
</head>
<body>


<!-- BARRE DE NAVIGATION -->
<header>
<?php include '../components/navbar-inscription.html'; ?>


<!-- HEADER -->

<!-- FORMULAIRE DE INSCRIPTION -->

<main>
    <div class="form-inscriptiion-container">
        
        <form method="POST" action="">
        <h1>Inscription</h1>
            <div class="box-1">
            <span class="message-erreur"><?php echo $messageErreur; ?></span>
            <label for="pseudo">Pseudo : </label>
            <input type="text" placeholder="Ex : Oms356" id="pseudo" name="pseudo" autocomplete="off">
            
            </div>

            <div class="box-2">
            <label for="mdp">Mot de passe : </label>
            <input type="password" placeholder="Ex : J'aimeLUHA40" id="mdp" name="mdp" autocomplete="off">
            </div>

            <input value="S'inscrire" type="submit" id="submit" name="envoi" >
       
        </form>
    </div>
</main>

</header>

</body>
</html>