<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid p-0">
        <header>
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="/wp-content/themes/twoje_finanse/assets/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">o nas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">oferta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">towarzystwa ubezpieczeń</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">dołącz do nas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">przydatne materiały</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">oddziały</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end .navbar -->
            <section class="header-family d-flex align-items-end">
                <div class="header-blue-section">
                    <h1>
                        Ubezpieczenie majątkowe
                    </h1>
                    <p class="bottom-blue-section">
                        Skontaktuj się z nami i skorzystaj ze specjalnej oferty!
                    </p>
                </div>
            </section>
        </header>
        <!-- end main header-section -->