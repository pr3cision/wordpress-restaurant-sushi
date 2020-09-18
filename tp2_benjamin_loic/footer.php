<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tp2_benjamin_loic
 */

?>

	<!--Bas de page-->
    <footer class="bg-black container-fluid p-5">

        <!--Logo bas de page-->
        <div class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Image de sushi">
        </div>

        <!--3 boite bas de page-->
        <div class="row mt-5">

            <!--Boite bas 1: Propos-->
            <div class="col-12 col-md-4 text-center px-5">
                <p class="text-uppercase text-white">À propos de nous </p>
                <span class="text-secondary">Nous sommes un restaurant qui porpose des sushi authentiques et rempli
                    saveurs.</span>
            </div>

            <!--Boite bas 2: Courriel-->
            <div class="col-12 col-md-4 text-center my-sm-5 m-md-0">
                <p class="text-uppercase text-white">obtenez des offrees et nouvelles</p>

                <!--Boite courriel-->
                <div class="input-group">
                    <input placeholder="Entrez votre courriel" class="form-control" id="email" name="email" />
                    <div class="Mail py-2 px-3">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                </div>

                <div>
                    <a href="#" class="fa fa-twitter text-secondary iconMail"></a>
                    <a href="#" class="fa fa-facebook-f text-secondary iconMail"></a>
                    <a href="#" class="fa fa-linkedin text-secondary iconMail"></a>
                    <a href="#" class="fa fa-instagram text-secondary iconMail"></a>
                </div>
            </div>

            <!--Boite bas 3: Adresse-->
            <div class="col-12 col-md-4 text-center">
                <p class="text-uppercase text-white">Notre adresse</p>
                <span class="text-secondary">30 Boulevard du séminaire N.</span>
                <br>
                <span class="text-secondary">Saint-Jean-Sur-Richelieu</span>
                <br>
                <span class="text-secondary">QC, J3B 5J4</span>
                <br>
                <span class="text-secondary">450-555-5555</span>
            </div>
        </div>
    </footer>
</div><!-- .bloc page -->

<?php wp_footer(); ?>

</body>
</html>
