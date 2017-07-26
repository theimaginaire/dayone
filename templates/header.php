<header class="site-header">
<div class="container">
	<div class="left">
		<a href="<?= esc_url(home_url('/')); ?>">
	        <?php 
	        if(get_field('logo', 'options')):
	        ?>
	        <img src="<?php the_field('logo', 'options'); ?>" alt="<?php the_field('company', 'options'); ?>" class="logo" />
	      <?php 
	      else:
	            the_field('company', 'options'); 
	      endif; ?>
	    </a>
	</div>
	<div class="right">
	<div class="right-content">
		<button class="menu-toggle">
	    	<div class="icon">
		    	<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </div>
	    </button>
		<div class="contacts">
		<ul>
			<li><a href="Tel:<?php echo phone(); ?>"><?php echo do_shortcode('[phone]'); ?></a></li>
			<li><a href="Tel:<?php echo email(); ?>"><?php echo do_shortcode('[email]'); ?></a></li>
		</ul>
		</div>
		<div class="main-navigation">
		<button class="close-i">
	    	<div class="icon">
		    	<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	
	        </div>
	    </button>
		<?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
	      endif;
	     ?>
	    </div>

	</div>
	</div>
</div>
</header>