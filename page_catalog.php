<?php
/*   
Template Name: Каталог
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
		<!-- кнопка ведет на страницу о нас -->
		<div class="link-button-page">
		<?php wp_nav_menu(array(
				'theme_location' => 'page-catalog-menu',
				'menu_class' => ''
			)); ?>
			<i class="fa fa-arrow-right" aria-hidden="true"></i>
		</div>
		<!-- кнопка ведет на страницу о нас -->
        <div class="contents content-katalog">
			<?php
			$id = 3; // номер категории
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
			?>

			<?php if ( $posts_about->have_posts() ) : ?>
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
        	<article class="article-catalog">
				<div class="catalog-div">
					<div class="div-tumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<div class="title-h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				</div> 	
            </article>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
        </div>

        <div class="content">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        	<article>
            	<h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
			<?php endwhile; ?>
			<?php endif; ?>
        </div>  
		
    </section><!-- end column-content -->
    </div><!-- end content -->
<?php get_footer(); ?>