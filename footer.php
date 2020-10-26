

<div class="row bg-dark text-light">

<a href="<?php echo site_url(); ?>"><strong>STADT_NATUR</strong> </a>
<br> <br>	
<ul>

<?php wp_nav_menu( array(
							'menu_class' => 'dropdown', //Fügt eine Klasse zum Menü hinzu
							'container_id' => 'navwrap', //Legt ID von dem Container fest, der das komplette Menü umgibt
							)
						); ?>
					
</ul>
	<?php dynamic_sidebar( 'footer-widget-area' ); ?>
	<div class="col">
                <p>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                
            
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                
            
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                
            
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                
            
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</p>
				</div>
              </div>
</div>

</div>




<div id="footer"><?php wp_footer(); ?></div>

  
</div>
</body>
</html>