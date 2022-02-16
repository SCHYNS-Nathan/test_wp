<?php get_header(); ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <header class="header">
        <h1 class="header__title"><?= (get_bloginfo('name'))?></h1>
        <p class="header__description"><?= (get_bloginfo('description'))?></p>
        <nav class="header__nav nav">
            <p class="header__placeholder">TODO...</p>
        </nav>
    </header>

    <footer class="footer">
        <section class="footer__body">
            <h2 class="footer__title">Pied de page</h2>
            <p class=""
        </section>
    </footer>
</body>
</html>

<!--
BEM = Base Element Modifier
-> façon de nommer les choses, à utiliser sur le portfolio et le projet client !!!

exemple:

header.header
    h1.header__title
    div.header__container
        p.header__description


 -->

