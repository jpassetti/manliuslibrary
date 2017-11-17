<?php get_header(); ?>

<div class="row">
	<main class="col-md-8 main-content">
		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail('large', array('class' => 'single-img')); ?>
			<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
	<?php } ?>
	<?php the_category(); ?>
	<h1><?php the_title(); ?></h1>
	<h4>Written by <?php the_author(); ?></h4>
	<h5>Published on <?php the_date(); ?></h5>
	<?php the_content(); ?>
	<?php the_tags('<div class="myTags"><i class="fa fa-tag"></i>', '', '</div>'); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	</main>
	<aside class="col-md-4 sidebar">
		Sidebar stuff goes here.
	</aside>
</div><!-- row -->

<?php get_footer(); ?>