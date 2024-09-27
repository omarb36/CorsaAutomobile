<?php 
session_start();

?>
<nav>
    <div class="logo">
        <img src="img/logo.png" alt="Logo de CorsaAutomobile">
        <h1>CorsaAutomobile</h1>
    </div>

    <div class="links">
        <ul>
            <li><a href="espace-membres/index-connect.php">Accueil</a></li>
            <li><a href="credits.php">Crédits</a></li>
            <li><a href="apropos.php">À propos</a></li>
        </ul>
    </div>

    <div class="user-info">
        <form action="espace-membres/logout.php" method="POST">
            <button type="submit" name="deconnexion" id="deconnexion">Déconnexion</button>
        </form>
    </div>
 
</nav>
