<?php get_header(); ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-8">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); 
	
	the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>


   
<h2>
	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	</h2>
<?php the_content(); ?>
<?php endwhile; endif; ?>
	   
<span>geschrieben am: <?php the_date('d.m.Y'); ?>
		von: <?php the_author(); ?> in
<?php the_category(', '); ?><?php the_tags(' und getagged mit: ', '', ''); ?></span>

		<hr>
		<h6 class="text-info">Eure Kommentare</h6>
<?php comments_template(); ?>
	</div>
	
<div class="col-3">
	

<?php get_sidebar(); ?>
    </div>
	</div>
</div>
 
<?php get_footer(); ?>