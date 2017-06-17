<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php pf_asset('css/main.css') ?>">
    <title>Mehdy Ouras</title>
</head>
<body>
<header class="header">
    <h1 class="u-hidden-visually">Mehdy Ouras</h1>
    <div class="siteHeader">
        <div tabindex="0" class="hamburger">
            <span class="u-hidden-visually">Menu hamburger</span>
        </div>
    </div>
    <?php get_template_part('part', 'nav'); ?>
    <nav class="socials">
        <h2 class="u-hidden-visually">Mes réseaux sociaux</h2>
        <a href="#" class="socials__item socials__item_linkedin"><span class="u-hidden-visually">LinkedIn</span></a>
        <a href="#" class="socials__item socials__item_github"><span class="u-hidden-visually">GitHub</span></a>
        <a href="#" class="socials__item socials__item_behance"><span class="u-hidden-visually">Behance</span></a>
        <a href="#" class="socials__item socials__item_dribbble"><span class="u-hidden-visually">Dribbble</span></a>
    </nav>
</header>