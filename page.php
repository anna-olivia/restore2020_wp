<?php get_header(); ?>
		<div class="container-fluid">
			<div class="row">
			
				<div class="col-8">
				
<h2 class="site-title">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php if ( get_header_image() ) { ?>
<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php echo esc_html( get_bloginfo( 'title' ) ); ?>" />
<?php } else { bloginfo( 'title' );
} ?> </a> </h2>
					
					<?php if ( get_bloginfo( 'description' ) != '' ) { ?> <h6 class="blog-description">
<?php bloginfo( 'description' ); ?>
</h6>
<?php } ?>
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>

			
				
	
		<div class="col">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<br><br>
		</div>
		</div>
		
					
		
	
<?php get_footer(); ?>