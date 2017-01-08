<?php

// check if the repeater field has rows of data
if( have_rows('carousel') ):
?>
<section class="owl-carousel owl-theme">
<?php 
 	// loop through the rows of data
    while ( have_rows('carousel') ) : the_row();

    // Individual carousel slide
?>
<div class="item" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
<div class="item-content">
	<?php the_sub_field('slide_content'); ?>
</div>
</div>
<?php
    
    endwhile;
?>
</section>
<?php
elseif(get_field('hero_content')) :

?>
<section class="hero" <?php if(get_field('hero_image')): ?> style="background-image:url(<?php the_field('hero_image'); ?>);" <?php endif; ?>>
	<div class="hero-content">
	<?php the_field('hero_content'); ?>
	</div>
</section>
<?php 
else: 
	get_template_part('templates/page', 'header');
endif;

?>