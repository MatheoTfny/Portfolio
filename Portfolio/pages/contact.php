<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact | Mon Portfolio</title>
    <!-- Style Global -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Style Background -->
    <link rel="stylesheet" href="../assets/css/background.css">
    <!-- Style header -->
    <link rel="stylesheet" href="../assets/css/header.css">

    <!-- Style Contact -->
    <link rel="stylesheet" href="../assets/css/contact.css">

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
    
    <div class="titre">
        <h1>Contactez-moi</h1>
    </div>


    <div class="contact">
        
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" name="nom" placeholder="Votre Nom" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Votre Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" rows="5" placeholder="Votre message..." required></textarea>
            </div>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </div>
    <!-- Lance le script pour animer les étoiles en background -->
    <script src="../assets/js/background.js"></script>

</body>

</html>