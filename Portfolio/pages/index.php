<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil | Mon Portfolio</title>
    <!-- Style Global -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Style Background -->
    <link rel="stylesheet" href="../assets/css/background.css">
    <!-- Style header -->
    <link rel="stylesheet" href="../assets/css/header.css">

    <!-- Style Index -->
    <link rel="stylesheet" href="../assets/css/index.css">

    <!-- Style du texte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



     
</head>
<body>
    <!-- Apelle le header -->
    <?php include '../assets/compenents/header.php'; ?>
    <!-- Créer la div pour les étoiles en background -->
    <div class="sparkles-bg"></div>
    
    
    <div class="intro-titre">
        <div class="titre">
            <h1>Bienvenue sur mon Portfolio !</h1>
        </div>
    </div>

    <div class="container">
        <div class="cadre">
            <div class="bloc-photo">
                <img src="../assets/img/photo_identite.png" alt="Photo de moi">
            </div>
            <div class="bloc-texte">
                <p>THEFANY Mathéo</p>
                <p>étudiant en BTS SIO SLAM a Ynov Campus</p>
                <a href="CV.pdf" target="_blank" class="bouton-portfolio">Voir mon CV (PDF)</a>
            </div>
        </div>
        
    </div>

    <!-- Lance le script pour animer les étoiles en background -->
    <script src="../assets/js/background.js"></script>


</body>

</html>