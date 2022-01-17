<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<meta name="google-site-verification" content="I7FFteD2oSQm4RtDcjLUeS3djRbfzDir65fi7CugKDU" />
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS2HS9J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->


    <header>
    	<div class="container clearfix">
            <div class="logo">
                <a href="/">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="105" alt="Лого Сталевар"/><br>
                    stalevar.dp.ua
                </a>
            </div>	
            <div class="head-content">
				<div class="head-content-hide">
					<div class="logo-hide">
						<a href="/">
							<img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="105"  alt="Логотип Сталевар"/><br>
							stalevar.dp.ua
						</a>
					</div>
					<div class="head-content-top clearfix">
						<div class="con-search">
							<form action="" class="clearfix">
								<input name="s" class="search-txt" type="text" value="Поиск по сайту" onBlur="if(this.value=='')this.value='Поиск по сайту'" onFocus="if(this.value=='Поиск по сайту')this.value=''" />
								<input class="search-img" type="image" src="<?php bloginfo('template_url'); ?>/images/search_bg.png" name="go" />
							</form>
						</div>
						<div class="con-contakt">
							<?php if(!dynamic_sidebar( 'tel_header' )): ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
                <div class="head-content-bot clearfix">
                <!--Мобильное меню-->
                <input type="checkbox" id="hmt" class="hidden-menu-ticker">
				<label class="btn-menu" for="hmt">
				  <span class="first"></span>
				  <span class="second"></span>
				  <span class="third"></span>
				</label>
                <!--конец Мобильное меню-->
                    <nav class="hidden-menu">
						<?php wp_nav_menu(array(
							'theme_location' => 'header_menu',
							'container' => 'ul',
							'menu_class' => ''
						)); ?>
                    </nav>
                </div>
				<div class="menu-hidden">
					<div class="menu">


					<nav class="pad-ul">
						<?php wp_nav_menu(array(
							'theme_location' => 'header_menu',
							'container' => 'ul',
							'menu_class' => ''
						)); ?>
                    </nav>

					<nav class="nopad">
					<?php wp_nav_menu(array(
						'theme_location' => 'sidebar_menu',
						'container' => 'ul',
						'menu_class' => ''
					)); ?>
					</nav>
					<a href="#" id="pull">Меню</a>

					</div>
					<div class="knopki">
						<?php wp_nav_menu(array(
							'theme_location' => 'slider-button',
							'container' => 'ul',
							'menu_class' => ''
						)); ?>
					</div>
					
				</div>
            </div>
        </div>
    </header>

