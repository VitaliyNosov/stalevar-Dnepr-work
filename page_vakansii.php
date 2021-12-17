<?php
/*   
Template Name: Вакансии
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
        <div class="content content-katalog cat-vak">
			<?php
			$id = 2; // номер категории
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
			?>

			<?php if ( $posts_about->have_posts() ) : ?>
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
        	<article class="article-catalog vakansii">
				<div class="catalog-div">
					<div class="div-tumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div> 	
            </article>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
        </div>  
    </section><!-- end column-content -->
    </div><!-- end content -->
<?php get_footer(); ?>