<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>

<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo add_css('accueil'); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo add_css('bootstrap'); ?>" />
    <?php if(isset($_SESSION['id_user']) || empty($_SESSION)){?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo add_css('user'); ?>" />
    <?php }?>
<!--    DataTables-->
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <?php
                if(isset($_SESSION['id_user'])) {
                    ?>
                    <a href="<?php echo site_url('Accueil/index'); ?>" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"> Accueil</a>
                    <a href="<?php echo site_url('user/seance'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Suivi séance</a>
                    <a href="<?php echo site_url('user/programme'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Packs</a>
                    <a href="<?php echo site_url('user/suiviP'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Suivi programme</a>
                    <a href="<?php echo site_url('user/profil'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profil</a>
                    <a href = "<?php echo site_url('login/logout'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Déconnexion</a >
                    <?php
                }else if(isset($_SESSION['id_coach'])) {
                    echo ' <a href="' . site_url('Accueil/index') . '" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
                    <a href = "' . site_url('Coach/seance') . '" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Séances </a >
                    <a href="' . site_url('Coach/programme') . '" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Programmes</a>
                    <a href="' . site_url('Accueil/index') . '#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>';

                    if (isset($_SESSION['id_coach'])) {
                        echo '<a href = "' . site_url('login/logout') . '" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Déconnexion</a >';
                    } else {
                        echo '<a href = "' . site_url('login/signup') . '" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Connexion</a >';
                        echo '<a href = "' . site_url('login/inscription') . '" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Inscription</a >';
                    }
                }else {?>
                    <a href="<?php echo site_url('Accueil/index'); ?>" class="w3-bar-item w3-button w3-teal"><i
                                    class="fa fa-home w3-margin-right"></i>Logo</a>
                        <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Notre équipe</a>
                        <a href="<?php echo site_url('user/pack'); ?>"
                           class="w3-bar-item w3-button w3-hide-small w3-hover-white">Packs</a>
                        <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
                        <a href = "<?php echo site_url('login/signup'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Connexion</a >
                        <a href = "<?php echo site_url('login/inscription'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" > Inscription</a >
              <?php
                }
            ?>
        </div>
    </div>

        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
               href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

        </div>
    </div>

        <!-- Navbar on small screens -->
        <?php if(isset($_SESSION['id_user']) || empty($_SESSION)){?>
            <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
                <a href="#team" class="w3-bar-item w3-button">Team</a>
                <a href="#work" class="w3-bar-item w3-button">Work</a>
                <a href="#pricing" class="w3-bar-item w3-button">Price</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
                <a href="#" class="w3-bar-item w3-button">Search</a>
            </div>
       <?php }else{ ?>
            <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
                <a href="<?php echo site_url('Accueil/accueil'); ?>#team" class="w3-bar-item w3-button">Team</a>
                <a href="#work" class="w3-bar-item w3-button">Work</a>
                <a href="#pricing" class="w3-bar-item w3-button">Price</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
                <a href="#" class="w3-bar-item w3-button">Search</a>
            </div>
        <?php } ?>
    </div>


</header>

<body id="myPage">
    <div class="container">
