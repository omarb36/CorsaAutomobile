<?php 
session_start();
?>
<nav>
    <div class="logo">
        <img src="../img/logo.png" alt="Logo de CorsaAutomobile">
        <h1>CorsaAutomobile</h1>
    </div>

    <div class="links">
        <ul>
            <li><a href="../espace-membres/index-connect.php">Accueil</a></li>
            <li><a href="credits.php">Crédits</a></li>
            <li><a href="apropos.php">À propos</a></li>
        </ul>
    </div>

    

    <div class="user-info">
        <?php if (isset($_SESSION['pseudo']))?>
        <span>Bienvenue <?php echo htmlspecialchars($_SESSION['pseudo']); ?></span>
        <form action="">
            <a href="../favoris.php"><img src="../img/favori.png" alt="Vos favoris"></a>
        </form>
        <form action="logout.php" method="POST">
            <button type="submit" name="deconnexion" id="deconnexion">Déconnexion</button>
        </form>
    </div>
 
</nav>