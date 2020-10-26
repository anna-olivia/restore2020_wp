<?php get_header(); ?>
 
 <div class="container-fluid">
   <div class="row">
       <br>
     <!--<div class="col-8">-->
       <br>
  <?php
    $args = array(
        'post_type' => 'attachement',
        'post_status' => 'any',
        'cat'=>3,
             'meta_query'=>
       array('relation'=>'AND',
         array(
        'key'=>'intro_post','value'=>'intro','type'=>'CHAR','compare'=>'LIKE'
        )
       )
   );
   $arr_posts = new WP_Query( $args );?>
    <?php  if (  $arr_posts->have_posts() ) : ?>
             <?php  while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
                  <div class="entry-content">
                        <?php if (has_post_thumbnail()): ?>
                        <figure>
                        <?php the_post_thumbnail('full');?>
                        </figure>
                       <?php endif; ?>
        <?php the_content(); ?>

        </div>
                 <?php  endwhile; ?>
          <?php else : ?>
               <?php get_template_part( 'single', 'none' ); ?>
          <?php endif; 
           wp_reset_query(); ?>
<br>
</div>

</div>

<?php get_footer(); ?>