<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/constructeurautomobile/style/style.css">
    <title>CorsaAutomobile / Crédits</title>
    
</head>
<body>
    <header class="credits-header">
        <video autoplay muted loop disablePictureInPicture id="background-video" controlsList="nodownload nofullscreen noremoteplayback">
            <source src="/constructeurautomobile/img/revuelto.mp4" type="video/mp4">
        </video>
        <!-- BARRE DE NAVIGATION -->

        <?php include 'components/navbar.html'; ?>
    

        <!-- SECTION TEXT -->

        <section class="section-credits">
            <div class="developpeur">
                <h1>Crédits</h1>

                <h2>Développeur</h2>
                <p>Omar Biber - Développeur de CorsaAutomobile</p>
            </div>

            <div class="technos">
                <h1>Technologies utilisés</h1>
                <ul>
                    <li>PHP</li>
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                    <li>APIs Constructeurs et Voitures</li>
                  </ul>
            </div>

            <div class="sources-api">
                <h2>Sources API</h2>
                    <ul>
                        <li>API Constructeurs : <a href="https://filrouge.uha4point0.fr/V2/car/constructeurs">Lien API Constructeurs</a></li>
                        <li>API Voitures : <a href="https://filrouge.uha4point0.fr/V2/car/voitures">Lien API Voitures</a></li>
                    </ul>
            </div>

        </section>
        </header>


        <!-- FOOTER -->

        <?php include 'components/footer.html'; ?>

<script src="main.js" defer></script>
</body>
</html>