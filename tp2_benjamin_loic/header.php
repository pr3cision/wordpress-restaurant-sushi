<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tp2_benjamin_loic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/icon.png">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="bloc_page">

    <!--Background top parralax-->
    <div class="bgTop d-none d-lg-block"></div>
    <header>

        <!--Menu haut de page-->
        <nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
            <div class="w-25">
                <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Logo Sushi Barito"></a>
            </div>

            <!--Menu haut-->
            <div class="collapse navbar-collapse justify-content-center order-3 order-lg-2" id="collapsibleNavbar">
                <ul class="nav d-block d-lg-flex navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#Qualité">Qualité et service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Jour">Menu du jour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Historique">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Événements">Événements</a>
                    </li>
                </ul>
            </div>

            <!--Bouton pour menu haut-->
            <div class="w-25 d-flex justify-content-end order-2 order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </nav>
    </header>
