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
    <p id="text-presentation">Je m'appelle Arturs Mednis, j'ai 20 ans et suis actuellement étuidant en informatique et plus précisemment en développement.
    <br> Je suis passionné d'informatique depuis mon plus jeune âge et m'y suis orienté dès le lycée.
    </p>
</div>
    <div class="competence">
        <h2 id="competences">Mes compétences</h2>
        <ul class="list-competence">
            <li>HTML/CSS</li>
            <li>PHP</li>
            <li>Symfony</li>
            <li>Conception de base de données</li>
        </ul>
    </div>

    <div id="cv">
        <h2> Mon CV </h2>
    </div>


<?php
    include "partials/footer.html";
?>

</body>

</html>