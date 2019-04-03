<?php

if(is_single()):

 ?>

 <div class="post">
 	<h2 class="post-title"><?php the_title(); ?></h2>
 	<?php  the_excerpt();?>
    <a href="<?php the_permalink(); ?>" class="link-primary">Veja mais</a>
 </div>

 <?php  else:?>

 	<div class="post">
 		<h3><?php the_title(); ?></h3>
 		<?php the_excerpt();?>
 		<a href="<?php the_permalink();?>" class="link-primary">Leia mais</a>
 	</div>
 <?php endif; ?>