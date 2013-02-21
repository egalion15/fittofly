<?php
/*
Template Name:diary
*/
?>
<!DOCTYPE HTML>

<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/styles/styledairy.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/styles/jquery-ui-1.8.16.custom.css" rel="stylesheet">

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-ui-1.8.16.custom.min.js"></script>

 <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
  <?php wp_head(); ?>
<script type="text/javascript">

	$(document).ready(function(){	

		if (!$.browser.opera) {
    
			// select element styling
			$('select.select').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="select">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};
		
	});
</script>

</head>
	<body>
	<div class="b-page__left"></div>
    <div class="b-page__right"></div> 
	<div class="b-page__imag"></div>	
	<div id="wrap" class="fix">	

		<? get_header() ;?>
		
		<div id="menu">
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
			</ul>
            <div id="hwrap" >

				<div id="hiblock">

					<ul id="ul1">
						<li><a href="<?php bloginfo('home'); ?>/o-kompanii">О компании</a></li>
						<li><a href="<?php bloginfo('home'); ?>/nasha-komanda">Наша команда</a></li>
						<li><a href="<?php bloginfo('home'); ?>/missiya">Миссия</a></li>
						<li><a href="<?php bloginfo('home'); ?>/novosti-i-akcii">Новости и акции</a></li>
					</ul>
					<ul id="ul2">
						<li><a href="<?php bloginfo('home'); ?>/category/tovary">Магазин</a></li>
						<li><a href="<?php bloginfo('home'); ?>/zhurna">Журнал</a></li>
						<li><a href="<?php bloginfo('home'); ?>/kontakty">Контакты</a></li>
					</ul>

				</div>
				<div id="hbotm"></div>
			</div>
			
		</div>
		<div id="precont">
		<div class="content">
			
						<div class="centertitle">	<div id="cwrap"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> <?php wp_head(); ?>
												  

						
						
						
						

						<div>
          
     
			
  
        </div></div></div>	
				
		<div id="dwrap">
		<div id="fotos">
			<div id="dfoto2">
					<img src="<? bloginfo("template_url"); ?>/styles/images/1.jpg" style="position:absolute;" id="foto1">
			</div>	
			<div id="dfoto1">			
					<img src="<? bloginfo("template_url"); ?>/styles/images/2.jpg" style="position:absolute;" id="foto2">
					</div>
				</div>
            <?if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="quot">« Эти тренировки позволяют
   по-настоящему совместить
   приятное с полезным »
			</div>
			<div id="from">
			<p>Имя:      Вината Шетти (Vinata Shetty)</p> 
			<p>Город:   Мумбаи </p>
			<p>Работа:  Инструктор программы  Fit to Flу </p>
			<p>Клуб:     Fitness First </p>
			</div>
			<div id="story">

<?php the_content(); ?>
			</div>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
			<div id="continue">
			  
  
				<a href="<?php bloginfo('home'); ?>/dnevniki"   >продолжить чтение</a>
				
			<div id="fon"></div>
			</div>
		</div>
		</div>
		<div class="rblock">
<div id="fbwrap" ><?php facebook_like_box('23822288801', '0', '3', '227', '210', '0', 'LOCALE'); ?></div>
		</div>
		<div class="rrsspace fix">
		
		<div class="rblock">
<div class="rss">
				<div><img src="<?php bloginfo('template_directory'); ?>/styles/images/rss.jpg"></div>
				 <? $content = apply_filters('the_content', '<p><!--subscribe2--></p>');
echo $content; ?>

			</div>
		</div>
		</div>
		</div>
<? get_footer()  ?>
	</div>
	</body>
</html>