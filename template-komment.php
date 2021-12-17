<?php
/*
Template Name Posts: Шаблон с комментариями
*/
?>
<?php get_header(); ?>
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
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        	<article>
            	<h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
			<?php endwhile; ?>
			<?php endif; ?>
            <div class="container-coment"><?php comments_template(); ?></div> 
        </div>  
    </section><!-- end column-content -->
    </div><!-- end content -->
<?php get_footer(); ?>