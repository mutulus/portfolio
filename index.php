<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&family=Satisfy&display=swap" rel="stylesheet">


    <title>Arturs</title>
</head>
<body>
<?php
include 'partials/nav.html';
?>

<div class="titre">
    <h1>Arturs Mednis</h1>
    <p class="sous-texte">BTS SIO - SLAM 2ème année Développeur Back-End</p>
</div>
<div class="presentation">
    <div class="icons">

        <i class="fa-solid fa-terminal fa-bounce" style="color: #117e37;"></i>
    </div>
    <p id="text-presentation">Je m'appelle Arturs Mednis, j'ai 20 ans et suis actuellement étudiant en informatique et plus précisément dans le développement.
    <br> Je suis passionné d'informatique depuis mon plus jeune âge et m'y suis orienté dès le lycée. Mon objectif est de travailler dans <br>le domaine de la
        cybersécurité à l'issue de mes études.
    </p>
</div>
    <div id="competence">
        <h2 class='competences'>Mes compétences</h2>
        <?php include './partials/card.html'?>
        <div id="cv-div">
        <a class="cv-lien" href="image/CV_Mednis_Arturs.pdf">Mon CV</a>
        </div>

    </div>

<div id="projets">
    <h2>Les différents projets réalisés</h2>
    <ul>
        <li>Développement d'un programme de cryptage RSA en python</li>
        <li>Système de bibliotheque, développement Back End en php avec gestion de base de données</li>
        <li>Développement d'une API</li>
    </ul>
</div>
<div id="passions">
    <h2 class="passions">Mes passions</h2>
    <img class="images-passions" src="/image/basket.jpg" alt="image-basketball">
    <img class="images-passions" src="/image/avion.jpg" alt="image-avion">
    <img class="images-passions" src="/image/gaming.png" alt="image-gaming">
    <h3>Jouer au basket</h3>
    <h3>Voyager et découvrir</h3>
    <h3>Jouer aux jeux vidéos</h3>


</div>



<?php
    include "partials/footer.html";
?>

</body>

</html>