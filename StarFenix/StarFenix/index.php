<?php  get_header();?>

<div class="content">


	

	<div class="main-section">
		<div class="posts-section">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			       <?php get_template_part('content', get_post_format()); ?>
		    <?php endwhile; ?>
		    <?php get_404_template(); endif;?>


			

		</div>
	</div>


</div>

<?php get_footer();?>