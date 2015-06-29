<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

        </main><!-- #main -->
                
        <footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
            <?php include 'index-p8.php'; ?>
            
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 left">
                    <a href="" title="Nous contacter">contact@unleashiz.com</a>
                    <p>06 12 34 56 78</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 right">
                    <form action="" method="post">
                        <div class="row">
                            <fieldset class="col-xs-12 col-sm-6 col-md-6">
                                <div>
                                    <label for="name">Nom</label>
                                    <input type="text" id="name">
                                </div>
                                <div>
                                    <label for="society">Société</label>
                                    <input type="text" id="society">
                                </div>
                                <div>
                                    <label for="tel">Téléphone</label>
                                    <input type="tel" id="tel">
                                </div>
                            </fieldset>
                            <fieldset class="col-xs-12 col-sm-6 col-md-6">
                                <div>
                                    <label for="firstname">Prénom</label>
                                    <input type="text" id="firstname">
                                </div>
                                <div>
                                    <label for="poste">Fonction</label>
                                    <input type="text" id="poste">
                                </div>
                                <div>
                                    <label for="mail">E-mail</label>
                                    <input type="email" id="mail">
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn">Envoyer</button>
                    </form>
                </div>
            </div>

                <!--<div class="site-info">
                        <?php do_action( 'unleashiz_credits' ); ?>
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'unleashiz' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'unleashiz' ), 'WordPress' ); ?></a>
                </div><!-- .site-info -->
        </footer>
	<?php wp_footer(); ?>
</body>
</html>