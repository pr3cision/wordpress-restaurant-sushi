<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tp2_benjamin_loic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="d-flex justify-content-center pt-5 mt-5 mt-lg-0">
	<div class="container row">
				<div class="col-12 col-lg-6 row d-flex align-items-center">
                    <div class="col-12 col-md-6 pr-md-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/boite1-1.jpg" alt="Sushi">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mt-3 mb-3 mt-lg-0">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/boite1-2.jpg" alt="Sushi">
                        </div>
                        <div>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/boite1-3.jpg" alt="Sushi">
                        </div>
                    </div>
				</div>
		<div class="col-12 col-lg-6 test4 pt-5 pb-5">		
			<header class="entry-header">
				<h1 class="text-uppercase font-weight-bold">
				<?php the_title(); ?>
				</h1>
			</header><!-- .entry-header -->

			<?php tp2_benjamin_loic_post_thumbnail(); ?>

			<div class="entry-content">
				
				<?php
				the_content();
				
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tp2_benjamin_loic' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
	</div>
</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
        <!--Boite 2: Description -->
        <div id="Qualité" class="row m-0">
            <div class="col-md-12 col-lg-5 col-xl-6  bgDescription"></div>
            <div class="service col-md-12 col-lg-7 col-xl-6">
                <div class="row bg-light py-5">
                    <div class="col-md-6 text-center px-5">
                        <i class="icon1 fas fa-utensils"></i>
                        <h5 class="text-uppercase font-weight-bold">Service</h5>
                        <span class="text">L’accueil aux clients est importante, car c’est la première impression, c'est
                            pour quoi nos employés sont toujours là pour vous.</span>
                    </div>
                    <div class="col-md-6 text-center px-5">
                        <i class="icon1 fas fa-leaf"></i>
                        <h5 class="text-uppercase  font-weight-bold">Fraîcheur</h5>
                        <span class="text">La qualité est primordiale, notre équipe utilise des ingrédients fraîs pour
                            créer des mets uniques pour tous vos repas!</span>
                    </div>
                    <div class="col-md-6 text-center px-5">
                        <i class="icon1 fas fa-wine-glass"></i>
                        <h5 class=" text-uppercase  font-weight-bold">Bon vin</h5>
                        <span class="text">Cette cuvée est une découverte sympathique, vin simple mais croquant et très
                            digeste. La fraîcheur des fruits rouges et les notes végétales sont agréables.</span>
                    </div>
                    <div class="col-md-6 text-center px-5">
                        <i class="icon1 fas fa-ice-cream"></i>
                        <h5 class="text-uppercase  font-weight-bold">Dessert</h5>
                        <span class="text">Le dessert est probablement l'étape la plus importante du repas, car ce sera
                            la dernière chose dont vos invités se souviendront avant de s'évader sur la table.</span>
                    </div>
                </div>
            </div>
        </div>

        <!--Boite 3: Spécialités -->
        <div id="Jour">
            <div class="container my-5">
                <div class="justify-content-center mb-3 position-relative">
                    <h2 class="text-uppercase text-red text-center">spécialité du jour</h2>
                    <div id="ScriptDate"></div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="d-flex justify-content-between pb-2">
                            <h3 class="font font-weight-bold">Assiete de sushi</h3>
                            <i class="icon2 fas fa-fish"></i>
                        </div>
                        <div class="d-flex">
                            <span>Super Zuppa Toscana</span>
                            <div class="points"></div><span>&#36;40</span>
                        </div>
                        <p class="ingredient">Poulet / Endives / Céleri / Thon</p>
                        <div class="d-flex">
                            <span>Super Rippa Costa</span>
                            <div class="points"></div><span>&#36;40</span>
                        </div>
                        <p class="ingredient">Poulet / Endives / Céleri / Thon</p>
                        <div class="d-flex">
                            <span>Hyper avio</span>
                            <div class="points"></div><span>&#36;40</span>
                        </div>
                        <p class="ingredient"><span data-toggle="tooltip"
                                title="Pâte sucrée de haricots rouges.">Anko</span> / Endives / Céleri / Thon</p>
                        <div class="d-flex">
                            <span>Le foubraque</span>
                            <div class="points"></div><span>&#36;40</span>
                        </div>
                        <p class="ingredient">Poulet / Endives / Céleri / Thon</p>
                    </div>

                    <!--Les type de vins-->
                    <div class="col-12 col-lg-6">
                        <div>
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="font font-weight-bold">Vins</h3>
                                <i class="icon2 fas fa-wine-glass"></i>
                            </div>
                            <div class="d-flex">
                                <span>Attems Tribes Collio 2017</span>
                                <div class="points"></div><span>&#36;40</span>
                            </div>
                            <p class="ingredient">Ribolla gialla / Vin blanc / Italien</p>
                            <div class="d-flex">
                                <span>Attems Tribes Collio 2018</span>
                                <div class="points"></div><span>&#36;40</span>
                            </div>
                            <p class="ingredient">Ribolla gialla / Vin blanc / Italien</p>
                        </div>

                        <!--Les dessert 1-->
                        <div>
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="font font-weight-bold">Dessert</h3>
                                <i class="icon2 fas fa-ice-cream"></i>
                            </div>
                            <div class="d-flex pb-3">
                                <span>Tarte double chocolat</span>
                                <div class="points"></div><span>&#36;40</span>
                            </div>
                            <div class="d-flex">
                                <span>Sushi dessert au fromage</span>
                                <div class="points"></div><span>&#36;26</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Boite 4: Notre histoire-->
        <div id="Historique">
            <div class="row m-0 histoire bg-light">

                <!--Texte boite 4-->
                <div class="col-12 col-lg-6 order-2 order-lg-1 my-5">
                    <div class="my-5">
                        <h1 class="text-center font font-weight-bold text-red m-0">Notre histoire</h1>
                        <div class="justify-content-center d-flex"><img src="<?php echo get_template_directory_uri() ?>/images/border.png" alt="Ligne rouge"></div>
                        <div class="justify-content-center d-flex m-lg-4 m-xl-5">
                            <p class="pt-5 pt-lg-0 w-75 text-center text">
                                Le restaurant a été ouvert en 2005, au cours des années nous nous sommes perfectionnés
                                en confection des sushis.
                                Notre but c’était d’amené cette culture japonaise au Québec et de la sublimé selon nos
                                ressources.
                            </p>
                        </div>
                        <p class="text-center m-0"><strong>Loïc, Mathis, Félix et Charlie</strong></p>
                        <p class="text-center text">Propriétaires</p>
                    </div>
                </div>

                <!--Images boite 4-->
                <div class="col-12 col-lg-6 order-1 order-lg-2 bgHistoire"></div>
            </div>
        </div>

        <!--Boite 5: Événements-->
        <div id="Événements">
            <div class="mb-5">
                <h1 class="text-center">Nos prochains événements</h1>
                <h2 class="font text-center text-red">~Soyez des nôtres!~</h2>
            </div>
            <div class="row m-auto container">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="overFlow">
                        <img class="img-fluid zoomImg" src="<?php echo get_template_directory_uri() ?>/images/country.jpg" alt="country">
                        <div class="dateBoite position-absolute">
                            <p class="text-center jours m-0">20</p>
                            <p class="text-center mois m-0">Juin</p>
                        </div>
                    </div>
                    <div class="p-5 border boiteText">
                        <h5 class="text-uppercase font-weight-bold pb-2">Soiré country</h5>
                        <p class="text">Bienvenue dans le Far West avec notre SOIRÉE THÉMATIQUE WESTERN au Québec!</p>
                        <a href="#" class="savoirPlus text-muted">En savoir plus</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="overFlow">
                        <img class="img-fluid zoomImg" src="<?php echo get_template_directory_uri() ?>/images/dansante.jpg" alt="Soiré dansante">
                        <div class="dateBoite dateLigne position-absolute">
                            <p class="text-center jours m-0">16</p>
                            <p class="text-center mois m-0">Juil.</p>
                        </div>
                    </div>
                    <div class="p-5 border boiteText">
                        <h5 class="text-uppercase font-weight-bold pb-2">Soiré dansante</h5>
                        <p class="text">Durant notre soirées dansantes nous avons plusieurs musiques différentes, tel
                            que la musiques des années 80!</p>
                        <a href="#" class="savoirPlus text-muted">En savoir plus</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-md-4 mt-lg-0">
                    <div class="overFlow">
                        <img class="img-fluid zoomImg" src="<?php echo get_template_directory_uri() ?>/images/degustation.jpg" alt="Soiré dansante">
                        <div class="dateBoite dateLigne position-absolute">
                            <p class="text-center jours m-0">10</p>
                            <p class="text-center mois m-0">Sept.</p>
                        </div>
                    </div>
                    <div class="p-5 border boiteText">
                        <h5 class="text-uppercase font-weight-bold pb-2">Dégustion gratuites</h5>
                        <p class="text">Découvrer nos nouvelles créations à chaque fin de semaine et expérimenté les
                            saveurs unique de nos sushis.</p>
                        <a href="#" class="savoirPlus text-muted">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Boite 6: Insta-->
        <h4 class="text-center text-uppercase font-weight-bold m-5">~Suivez notre insta~</h4>

        <!--Carousel bas de page-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!--Indicateur carousel-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--images insta foncé carousel-->
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta1.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta2.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta3.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta4.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta5.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta6.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <!--images insta claire carousel-->
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta7.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta8.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta9.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta10.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta11.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 p-0 container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/insta/insta12.jpg" class="d-block w-100 img-fluid" alt="image de sushi">
                            <div class="overlay">
                                <div class="icon">
                                    <i class="p-1 far fa-heart f ScriptInsta"></i>
                                    <i class="p-1 far fa-comment ScriptInsta"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Bouton gauche carousel-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!--Bouton droite carousel-->

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

