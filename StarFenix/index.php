<?php  get_header();?>

<div class="content">


	

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