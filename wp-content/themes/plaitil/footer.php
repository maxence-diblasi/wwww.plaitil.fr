<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<section class="section-padding-footer">
	<footer class="row foot-plaitil">
		<article class=" small-12 medium-4 large-4  block-text-mention columns">
			<a href="#">Mentions légales</a><a href="#">Copyright | Plait-il ? / 2016</a>
		</article>
		<article class=" small-12 medium-4 large-4 block-text-adresse columns">
			<a href="#" class="inactif-a">Plait-il ?</a>
			<a href="#">5 rue du Bûcher, 13007 Marseille </a>
		</article>
		<article class=" small-12 medium-4 large-4  block-text-reseaux columns">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
		</article>
	</footer>
</section>

<script type="text/javascript">
$('aside').hide();

$('a i').on("click", function () {
$('aside').animate({width:'toggle'},300);
});

$('aside i').on("click", function () {
$('aside').animate({width:'toggle'},300);
});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
