<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boualem Dahmane</title>
    <meta name="description" content="Dévelopeur WordPress, création de site et boutique en ligne">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/88273c387a.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <div class="nom">
                    <a id="logo" class="element-animation" href="#">Boualem Dahmane</a>
                    <div class="linkedin-github element-animation">
                        <a href="https://github.com/bibodev23" target="_blank" aria-label="Github"><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/dahmaneboualem/" target="_blank" aria-label="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="burger">
                    <i class="fa-solid fa-bars"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <div class="links">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false
                )); ?>
            </div>


        </nav>
        <div class="hero">
            <div class="description">
                <h1 class="element-animation">Création de site sur mesure</h1>
                <h2 class="element-animation">Développeur WordPress, je crée des solutions digitales pour les entreprises de toutes tailles</h2>
            </div>
            <div class="btn">
                <button class=" btn-contactez-moi element-animation"><a href="#contact">Contactez-moi</a></button>
                <button class="btn-projets element-animation"><a href="#portfolio" >Voir mes projets</a></button>
            </div>
        </div>
    </header>
    <main>