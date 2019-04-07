<?php  get_header();?>

<div class="content">

	<div class="header-slide">
   
    <div class="bxslider">
		  <div><img src="<?php bloginfo('template_url'); ?>/img/paint.svg" ></div>
		  <div><img src="<?php bloginfo('template_url'); ?>/img/vintage.svg"></div>
    </div>

</div>
	 
	

	<div class="main-section">
		<div class="posts-section">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			       <?php get_template_part('content', get_post_format()); ?>
		    <?php endwhile; ?>
		    <?php get_404_template(); endif;?>


			<?php next_posts_link('Anteriores'); ?><?php previous_posts_link('Próximos')?>

		</div>
		
	</div>



	<?php get_sidebar(); ?>


</div>

<?php get_footer();?>