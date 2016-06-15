<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="cycle-conteneur">
	<div id="accueil" class="cycle accueil cycle-slideshow mon-cycle" data-cycle-fx="scrollHorz" data-cycle-speed="800" data-cycle-carousel-fluid=true data-cycle-timeout=5000 data-cycle-pause-on-hover="true" data-cycle-slides="> div">
		<div class="slide-item">
			<div class="img-fond">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/test-slider.png" alt="slider-agence" class="agence-slide" />
			</div>
			<div class="text-conteneur">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo-plaitil-slider.png" alt="logo-plaitil-sider" class="logo-plaitil-sider" />
				<h2>Vous avez un projet en tête?</h2>
				<a href="<?php bloginfo('home') ?>#contact" class="bouton-blanc-slider">Contactez nous</a>
			</div>
		</div>
		<?php
			$args = array(
			'post_type' => 'projet',
			'posts_per_page' => 2,
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="slide-item">
				<div class="img-fond">
					<img src="<?php echo get_field('image_slider'); ?>" alt="slider-agence" class="agence-slide" />
				</div>
				<div class="text-conteneur">
					<h2><?php the_title(); ?></h2>
					<a href="<?php the_permalink(); ?>" class="bouton-blanc-slider">Voir le projet</a>
				</div>
			</div>
			<?php
			endwhile;
			} else {
			echo __( 'Erreur de chargement' );
			}
			wp_reset_query();
		?>
	</div>
</div>
<div class="clear"></div>
<section class="main-conteneur">
	<div class="section-padding agence" id="agence">
		<div class="row section-agence">
			<article class="small-12 medium-6 large-6 block-text-agence columns">
				<h2 class="text-left gros-titre">Agence «Plait-il?»</h2>
				<h4 class="text-left petit-titre">Exploratrice en web depuis 2005</h4>
				<p class=" text-left text-contenu">
					Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
				</p>
				<p class="text-contenu">
					L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et
					sur-mesure. Elle garantit un pilotage efficace et le respect de nos
					engagements.
				</p>
				<p class="text-contenu">
					Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
				</p>
			</article>
			<article class="small-12 medium-6 large-6 block-visu-agence columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/puce-agence.png" alt="puce-logo" class="puce-logo" />
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/mockup-mac-agence.png" alt="imac agence" class="visuel-imac-agence" />
				<a href="<?php bloginfo('home') ?>#projet" class="small-12 medium-12 large-6  bouton-bleu bouton-bleu-agence-projet columns">projet</a>
				<a href="<?php bloginfo('home') ?>#contact" class="small-12 medium-12large-6 bouton-bleu bouton-bleu-agence-contact columns">contact</a>
			</article>
		</div>
	</div>
	<div class="section-padding section-padding-bleu projet" id="projet">
		<div class="row section-projet">
			<article class="small-12 medium-12 large-12 block-text-projet columns">
				<h2 class="text-center gros-titre">Projets</h2>
				<h4 class="text-center petit-titre">quelques unes de nos réalisations</h4>
				<p class=" text-center text-contenu">
					Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente<br/>
					afin de vous faire profiter des dernières tendances et innovations pour un design
				</p>
			</article>
			<article class="small-12 medium-12 large-12 block-visu-projet row">
				<?php
					$args = array(
					'post_type' => 'projet',
					'posts_per_page' => 5,
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="small-12 medium-6 large-4 columns hover-projet end">
						<a class="img-fond" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<a href="<?php the_permalink(); ?>" class="a-hover"><span class="text-hover">
							<h5><?php the_title(); ?></h5>
							<h6 class="voir-plus">voir +</h6>
						</span></a>
					</div>
					<?php
					endwhile;
					} else {
					echo __( 'Erreur de chargement' );
					}
					wp_reset_query();
				?>
			</article>
			<article class="small-12 medium-12 large-12 block-visu-projet columns">
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
			</article>
		</div>
	</div>
	<div class="section-padding">
		<div id="contact" class="row section-contact">
			<article class="small-12 medium-6 large-6 block-form-contact columns">
				<div class="contact-form-bleu">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
				</div>
			</article>
			<article class="small-12 medium-6 large-6 block-text-contact columns">
				<h2 class="text-left gros-titre">Nous contacter</h2>
				<h4 class="text-left petit-titsre">NE SOYEZ PAS TIMIDE !</h4>
				<p class=" text-left text-contenu">
					Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !
				</p>
			</article>
		</div>
	</div>
</section>

<?php get_footer();
