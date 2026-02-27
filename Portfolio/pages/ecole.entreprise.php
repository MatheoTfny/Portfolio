<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole / Entreprise | Mon Portfolio</title>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/background.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/ecole.entreprise.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../assets/compenents/header.php'; ?>
    
    <div class="sparkles-bg"></div>
    
    <div class="intro-titre">
        <div class="titre">
            <h1>Parcours Professionnel</h1>
        </div>
    </div>

    <div class="container">
        
        <div class="ecole">
            <div class="texte">
                <h1>Mon école</h1>
                <p>Actuellement en BTS SIO option SLAM au sein du <strong>Campus Ynov Paris Nanterre</strong>, j'évolue dans un environnement dédié à l'innovation numérique.</p>
                <p>La pédagogie en mode projet me permet de développer une grande autonomie technique et de maîtriser les enjeux du développement logiciel (Clean Code, SQL, méthodologies agiles) aux portes de La Défense.</p>
            </div>
            <div class="photo">
                <img src="../assets/img/ynov_campus.jpg" alt="Campus Ynov Nanterre">
            </div>
        </div>

        <div class="entreprise">
            <div class="texte">
                <h1>Mon entreprise</h1>
                <p>J'effectue mon alternance au sein de la <strong>Refactory</strong> du groupe Renault en tant que développeur d'applications.</p>
                <p>Mes missions principales consistent à Digitaliser les postes de travail et comprendre les besoin. Travailler dans ce contexte professionnel m'apprend à respecter des délais rigoureux et à collaborer efficacement au sein d'une équipe technique.</p>
                <img src="../assets/img/refactory_logo.png" alt="Logo Refactory">
            </div>
            <div class="photo">
                <img src="../assets/img/refactory_flins.jpg" alt="Logo Entreprise">
            </div>
        </div>

    </div>

    <script src="../assets/js/background.js"></script>
</body>
</html>