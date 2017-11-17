<?php get_header(); ?>

<div class="row">
	<main class="col-xs-12 col-sm-8 main-content">
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
	</article>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</main>
	<?php get_sidebar(); ?>
</div><!-- row -->

<?php get_footer(); ?>