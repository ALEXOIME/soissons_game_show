<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). './style.css' ?>">
</head>
<body>
    <header>
        <div class="content-header-nav-bar">
            <div class="content-logo">
                <img src="/wp-content/themes/Soissons-Games-Show-Theme/client/res/img/png/logo.png" alt="logo">
            </div>
            <div class="content-title">
                <h2 class="title"><?php wp_title_rss() ?></h2>
            </div>
            <div class="content-button-nav-menu">
                <button class="button-nav-menu">
                    <div class="bar-button"></div>
                    <div class="bar-button"></div>
                    <div class="bar-button"></div>
                </button>
            </div>
            <div class="content-nav-menu">

            </div>
            <div class="content-image-header">
                <img class="image-header" src="/wp-content/themes/Soissons-Games-Show-Theme/client/res/img/png/intro-header.png">
            </div>
        </div>
    </header>