<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?= $title ?></title>
    <!--META-->
    <meta name="description" content="<?= $meta ?>" />
    <meta name="keywords" content="frisbee, ultimate frisbee, association ultimate, frisbee Troyes">
    <meta name="author" content="CURFS Fabien, BOUDRAA Liam, GUERTIN Mathis, GRENIER Mattis">

    <!--FAVICON-->
    <!---<link rel="icon" href="assets/favicon/favicon.ico" sizes="any">---->
    <link rel="icon" href="<?php echo base_url() ?>/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/favicon.svg">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/styles.css" type="text/css">
    <?php
    if (!empty($css)) {
        foreach ($css as $cssLink) {
            echo "<link rel='stylesheet' href='" . base_url() . "/assets/css/" . $cssLink . "' type='text/css'> ";
        }
    }
    ?>

</head>

<body>

    <nav class="nav-responsive">
        <a href="" class="header-link">ACCUEIL</a>
        <a href="" class="header-link">ACTUALITÉS</a>
        <a href="" class="header-link">ENTRAÎNEMENTS</a>
        <a href="" class="header-link">CALENDRIER</a>
        <a href="" class="header-link">ACTUALITÉS</a>
        <a href="" class="header-link">GALERIE</a>
        <a href="" class="header-link">CONTACT</a>
    </nav>

    <header>

        <div class="header-responsive">
            <img src="<?php echo base_url() ?>/assets/svg/logo-black.svg" alt="Logo DiscTroy(es) noir">

            <label class="header-hamburger" for="check">
                <input type="checkbox" id="check" />
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>


        <div class="header-nav">

            <img src="<?php echo base_url() ?>/assets/svg/logo-black.svg" alt="Logo DiscTroy(es) noir">
            <nav>
                <a href="" class="header-link 
                <?php if ($navActiv == 1) {
                    echo 'activ';
                } ?>">
                    ACCUEIL</a>
                <a href="" class="header-link <?php if ($navActiv == 2) {
                                                    echo 'activ';
                                                } ?>">ACTUALITÉS</a>
                <div class="header-deroul <?php if ($navActiv == 3) {
                                                echo 'activ';
                                            } ?>">
                    <p>INFORMATIONS</p>
                    <svg x="0px" y="0px" viewBox="0 0 18 13" xml:space="preserve">
                        <path d="M8.3,12.6c0.1,0.1,0.2,0.2,0.3,0.3C8.7,13,8.9,13,9,13c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3l8.1-11.3
						C17.9,1.2,18,1.1,18,0.9c0-0.2,0-0.3-0.1-0.5c-0.1-0.1-0.2-0.3-0.3-0.3C17.4,0,17.3,0,17.1,0H0.9C0.7,0,0.6,0,0.4,0.1
						S0.2,0.3,0.1,0.5C0,0.6,0,0.8,0,0.9c0,0.2,0.1,0.3,0.2,0.4L8.3,12.6z" />
                    </svg>
                    <div class="deroul-list">
                        <a href="" class="header-link">ENTRAÎNEMENTS</a>
                        <a href="" class="header-link">CALENDRIER</a>
                        <a href="" class="header-link">ACTUALITÉS</a>
                    </div>
                </div>
                <a href="" class="header-link <?php if ($navActiv == 4) {
                                                    echo 'activ';
                                                } ?>">GALERIE</a>
                <a href="" class="header-link <?php if ($navActiv == 5) {
                                                    echo 'activ';
                                                } ?>">CONTACT</a>
            </nav>

        </div>

        <div class="header-search">
            <svg viewBox="0 0 33 32">
                <path d="M29.4732 25.1424C28.6623 24.3893 27.8731 23.6145 27.1064 22.819C26.4623 22.1845 26.0745 21.7228 26.0745 21.7228L21.2267 19.4783C23.1675 17.3441 24.2387 14.5966 24.2392 11.7511C24.2392 5.2729 18.8027 0 12.1196 0C5.43652 0 0 5.2729 0 11.7511C0 18.2294 5.43652 23.5023 12.1196 23.5023C15.172 23.5023 17.9544 22.3943 20.0891 20.5829L22.404 25.2834C22.404 25.2834 22.8801 25.6594 23.5346 26.2839C24.2046 26.8933 25.0859 27.7176 25.9308 28.5787L28.282 30.9155L29.3278 32L33 28.4394L31.8815 27.4255C31.2253 26.801 30.3493 25.9717 29.4732 25.1424ZM12.1196 20.1448C7.34622 20.1448 3.46275 16.3794 3.46275 11.7511C3.46275 7.12286 7.34622 3.35747 12.1196 3.35747C16.893 3.35747 20.7765 7.12286 20.7765 11.7511C20.7765 16.3794 16.893 20.1448 12.1196 20.1448Z" />
            </svg>
            <input type="text"></input>
        </div>
    </header>

    <aside class="horaires-fixed">
        <svg class="horaires-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51 46" xml:space="preserve">
            <path d="M42.4,32.5h-3.3c-0.3,0-0.6,0.2-0.8,0.5c-0.7,1.2-1.6,2.3-2.6,3.3c-1.7,1.7-3.7,3.1-5.9,4
			c-2.3,1-4.7,1.5-7.2,1.5c-2.5,0-4.9-0.5-7.2-1.5c-2.2-0.9-4.2-2.3-5.9-4c-1.7-1.7-3-3.7-4-6c-1-2.3-1.4-4.8-1.4-7.3
			c0-2.5,0.5-5,1.4-7.3c0.9-2.2,2.3-4.2,4-6c1.7-1.7,3.7-3.1,5.9-4c2.3-1,4.7-1.5,7.2-1.5c2.5,0,4.9,0.5,7.2,1.5C32,6.7,34,8,35.7,9.7
			c1,1,1.8,2.1,2.6,3.3c0.2,0.3,0.5,0.5,0.8,0.5h3.3c0.4,0,0.7-0.4,0.5-0.8C39.1,5.1,31.5,0.1,22.9,0C10.4-0.2,0,10.2,0,23
			c0,12.7,10.1,23,22.6,23c8.7,0,16.4-5,20.2-12.7C43.1,32.9,42.8,32.5,42.4,32.5z" />
            <path d="M50.5,17.1H35.7c-0.3,0-0.5,0.2-0.5,0.5v2.8c0,0.3,0.2,0.5,0.5,0.5h14.8c0.3,0,0.5-0.2,0.5-0.5v-2.8
			C51,17.3,50.8,17.1,50.5,17.1z M42.8,25.1h-7.1c-0.3,0-0.5,0.2-0.5,0.5v2.8c0,0.3,0.2,0.5,0.5,0.5h7.1c0.3,0,0.5-0.2,0.5-0.5v-2.8
			C43.2,25.3,43,25.1,42.8,25.1z M23.5,11.8H21c-0.4,0-0.6,0.3-0.6,0.7v14.6c0,0.2,0.1,0.4,0.3,0.5l8.6,6.4c0.3,0.2,0.7,0.2,0.9-0.1
			l1.5-2.1v0c0.2-0.3,0.1-0.7-0.1-0.9l-7.3-5.4v-13C24.1,12.1,23.8,11.8,23.5,11.8z" />
        </svg>

        <p>HORAIRES ENTRAÎNEMENTS</p>

        <div class="horaires-listes">
            <p class="horaires-creneau">Adultes et Jeunes U17/U20 :</p>

            <ul>
                <?php
                foreach ($horaires as $horaire) {
                    if ($horaire['creneau'] == 0) {
                        echo '<li>';
                        echo '<p><span class="horaires-jour">' . $horaire['jour'] . '</span> | <span class="horaires-heure">' . $horaire['heure'] . '</span></p>';
                        echo '<p>' . $horaire['lieu'] . ' <span class="horaires-type">(' . $horaire['type'] . ')</span></p>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>

            <p class="horaires-creneau">Jeunes (à partir de 10 ans) :</p>

            <ul>
                <?php
                foreach ($horaires as $horaire) {
                    if ($horaire['creneau'] == 1) {
                        echo '<li>';
                        echo '<p><span class="horaires-jour">' . $horaire['jour'] . '</span> | <span class="horaires-heure">' . $horaire['heure'] . '</span></p>';
                        echo '<p>' . $horaire['lieu'] . ' <span class="horaires-type">(' . $horaire['type'] . ')</span></p>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>

        </div>
    </aside>