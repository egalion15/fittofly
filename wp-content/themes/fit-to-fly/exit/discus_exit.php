<?php
/*
Template Name:discus
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


</head>
	<body>
	<div class="b-page__left"></div>
    <div class="b-page__right"></div> 
	<div class="b-page__imag"></div>	
	<div id="wrap" class="fix">	

		<? get_header() ;?>
		
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
			</ul><div id="mright"></div>
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
			
						<div class="centertitle">	<div id="cwrap"><span id="item"><? the_title(); ?></span><div>
          
     
			
  
        </div></div></div>	
				
		<div id="dwrap">
		<? $numpost=4; if($paged>1) $offset=$numpost*($paged-1); else $offset=0; query_posts('cat=21&offset='.$offset.'&showposts='.$numpost); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
							<div class="new">
				<div class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
					<? if ( has_post_thumbnail()) { ?><div class="image "><?
			

   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
?>
<?
  echo   get_the_post_thumbnail($post->ID,  array(200,250)); ?> </div> <?}?>
				<div class="text fix"><? the_excerpt();?></div></div>
			
		
				<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  ?>
			<div id="pagenavi">
				<div class="btns"><?php  wp_page_numbers(); ?></div>
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