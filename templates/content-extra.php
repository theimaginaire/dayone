<?php
// Extra Sections Template Part
if( have_rows('extra_sections') ):
?>
<section class="extra">
	<?php
	 	// loop through the rows of data
	    while ( have_rows('extra_sections') ) : the_row();

	        // display a sub field value
	        $width = get_sub_field('panel_style');
	?>
		<div class="child <?php if($width): echo $width; endif; ?> lazy" <?php if(get_sub_field('section_image')): ?> data-original="<?php the_sub_field('section_image'); ?>" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/dist/images/grey.png);" <?php endif; ?>>
            <div class="child-content">
                <?php the_sub_field('section_content'); ?>
            </div>
		</div>
	<?php 
	    endwhile;
?>
</section>
<?php 

endif;
?>