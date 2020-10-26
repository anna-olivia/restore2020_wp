<?php get_header(); ?>
			
	<div class="container-fluid">
		<div class="row"> <br>
		<div class="col-8">
			<br>
			<h2 class="text-info" id="category_title"><?php single_cat_title( '', true ); ?></h2>
			<div id="category_description"><?php echo category_description(); ?></div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="article">
					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</div> 
			<?php endwhile; endif; ?>
		</div>
		
 
		<div class="col-3"> 
			<?php get_sidebar(); ?>
		</div>
					
	
	</div>
</div>
 
<?php get_footer(); ?>