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
		<!--Хлебные крошки-->
			<div class="bread-crumbs">
   				 <?php if(function_exists('bcn_display'))
    		{
        		bcn_display();
    		}?>
			</div>
			<!--end Хлебные крошки-->
			<h1>Результаты поиска</h1>
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        	<article>
            	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <div class="end-post"><a href="<?php the_permalink(); ?>">Подробнее <span>&#8250;</span></a></div>
            </article>
			<?php endwhile; ?>
			<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
				<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
			</nav><!-- #<?php echo $html_id; ?> .navigation -->
			<?php else: ?>
			<?php endif; ?>
        </div>  
    </section><!-- end column-content -->
    </div><!-- end content -->
<?php get_footer(); ?>