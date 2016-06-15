<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="portfolio-padding">
	<section class="article-portfolio row">
		<div class="text-left conteneur-text small-12 medium-8 large-8 columns">
			<h3><?php the_title(); ?></h3>
			<h4><?php echo get_field('sous_titre_projet'); ?></h4>
			<p><?php
				if ( have_posts() ) {
				while ( have_posts() ) : the_post();
				the_content();
				endwhile;
				} else {
				echo __( 'Erreur de chargement' );
				}
				wp_reset_query();
			?>
			</p>
		</div>
		<div class="text-left conteneur-caracteristique small-12 medium-4 large-4 columns">
			<div class="small-12 block-caracteristiques">
				<div class="caracteristique-backoffice">
					<h6>caractéristiques :</h6>
					<p><?php echo the_category(' | '); ?></p>
				</div>
				<h6>date :</h6>
				<p><?php echo get_field('date'); ?></p>
				<a href="#" target="_blank" class="bouton-blanc-portfolio">Visiter le site</a>
				<a href="#" class="sharing"><i class="fa fa-share" aria-hidden="true"></i></a>
			</div>
			<a href="#" class="site-projet">consulter le site</a>
			<a href="<?php bloginfo('home') ?>#projet" class="retour-projet">consulter les autres projets</a>
		</div>
		<div class="text-center image-conteneur small-12 medium-12 large-12 columns">
			<img src="<?php echo get_field('image_projet_01'); ?>" alt="" />
			<img src="<?php echo get_field('image_projet_02'); ?>" alt="" />
			<img src="<?php echo get_field('image_projet_03'); ?>" alt="" />
			<a href="#" class="site-projet">consulter le site</a>
			<a href="<?php bloginfo('home') ?>#projet" class="retour-projet">consulter les autres projets</a>
		</div>
	</section>
</div>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
