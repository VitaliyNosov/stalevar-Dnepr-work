<?php
/**
 * The template for displaying 404 pages (not found)
 **/
 get_header(); ?>
    <div class="center-content container clearfix">
    <?php get_sidebar('left'); ?>
    <section class="container-content"> 
    	<div class="slider-container clearfix">
        	<div class="slider"><?php if( function_exists('cyclone_slider') ) cyclone_slider('glav'); ?></div>
            <div class="knopki">
				<?php wp_nav_menu(array(
					'theme_location' => 'slider-button',
					'container' => 'ul',
					'menu_class' => ''
				)); ?>
            </div>
        </div>
        <div class="content">
			<image class="mx_404" src=/wp-content/themes/stalevar/images/404.png>
			<h1 class="page-title">Извините, такая страница не найдена.</h1>
			<p><a href="/">Перейти на главную</a></p>
		</div>  
    </section><!-- end column-content -->
    </div><!-- end content -->
<?php get_footer(); ?>