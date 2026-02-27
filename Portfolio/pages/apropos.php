<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À propos | Mon Portfolio</title>

    <!-- Style Global -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Style Background -->
    <link rel="stylesheet" href="../assets/css/background.css">
    <!-- Style header -->
    <link rel="stylesheet" href="../assets/css/header.css">

    <!-- Style A propos -->
    <link rel="stylesheet" href="../assets/css/apropos.css">

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
            <h1>Mon Parcours :</h1>
        </div>
    </div>


    <div class="cadre">
        <div class="ecole">
            <div class="titre-carte">
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#230b7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap-icon lucide-graduation-cap"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg> Parcours Scolaire :</h2>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2025 - 2027 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Ynov Campus - Nanterre</h3>
                        <p>BTS SIO option SLAM.</p>
                    </div>
                    <img src="../assets/img/ynov_campus.jpg" alt="Photo du campus Ynov">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2023 - 2025 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>CFA Aforp - Mantes-la-ville</h3>
                        <p>Bac Pro SN Option C - <span class="vert">Mention très bien</span></p>
                    </div>
                    <img src="../assets/img/aforp_mantes.jpg" alt="Photo du CFA Aforp de mantes">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2021 - 2023 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>CFA Léa CFI - Aubergenville</h3>
                        <p>Bac Pro MELEC - <span class="vert">Mention assez bien</span></p>
                    </div>
                    <img src="../assets/img/lea_cfi_aubergenville.jpg" alt="Photo du CFA Lea CFI d'Aubergenville">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2020 - 2021 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Lycée Van Gogh - Aubergenville</h3>
                        <p>Seconde Général</p>
                    </div>
                    <img src="../assets/img/lycee_vincent_van_gogh_img.jpg" alt="Photo du CFA Lea CFI d'Aubergenville">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2016 - 2020 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Collège Arthur Rimbaud - Aubergenville</h3>
                        <p>Brevet des collèges</p>
                    </div>
                    <img src="../assets/img/college_arthur_rimbaud.jpg" alt="Photo du CFA Lea CFI d'Aubergenville">
                </div>
            </div>
        </div>


        <div class="entreprise">
            <div class="titre-carte">
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#230b7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase-business-icon lucide-briefcase-business"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg> Parcours Entreprise :</h2>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2025 - 2027 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Refactory du Groupe Renault - Flins-Sur-Seine</h3>
                        <p>Alternance à l'IES</p>
                    </div>
                    <img src="../assets/img/refactory_flins_ies.jpg" alt="Photo de la Refactory de flins ">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2023 - 2025 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Refactory du Groupe Renault - Flins-Sur-Seine</h3>
                        <p>Alternance à l'IES</p>
                    </div>
                    <img src="../assets/img/refactory_flins.jpg" alt="Photo de l'usine Refactory de flins vu du ciel">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>2021 - 2023 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Electrofluid - Orgeval</h3>
                        <p>Apprentis éléctricien</p>
                    </div>
                    <img src="../assets/img/electrofluid_photo.jpg" alt="Photo d'Electrofluid">
                </div>
            </div>
            <div class="container">
                <div class="periode">
                    <p>Dec - 2019 </p>
                </div>
                <div class="carte">
                    <div class="texte">
                        <h3>Usine Renault - Flins-Sur-Seine</h3>
                        <p>Stage de 3ème service impression 3D</p>
                    </div>
                    <img src="../assets/img/renault_usine_flins.jpg" alt="Photo Usine Renault Flins">
                </div>
            </div>
        </div>

        









    <!-- Lance le script pour animer les étoiles en background -->
    <script src="../assets/js/background.js"></script>
    


</body>

</html>