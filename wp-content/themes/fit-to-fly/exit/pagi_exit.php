<?php
/*
Template Name:pagitest
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
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники Jukari</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
			</ul><div id="mright"></div>
			
		</div>
		<div id="precont">
		<div class="content">
			
						<div class="centertitle">	<div id="cwrap"><span id="item"><? the_title(); ?></span><div>
          
     
			
  
        </div></div></div>	
				
		<div id="dwrap">
		<? $numpost=1; if($paged>1) $offset=$numpost*($paged-1); else $offset=0; query_posts('cat=22&offset='.$offset.'&showposts='.$numpost); ?>
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
				<div class="btns"><?php wp_page_numbers();?></div>
			</div>
		</div>
		</div>
		<div class="rblock">
			<iframe style="border-radius:14px 14px 14px 14px; height:230px;" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Freebokwomen&amp;width=227&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:227px; height:258px;" allowTransparency="true"></iframe>
		</div>
		<div class="rrsspace fix">
		
		<div class="rblock">
			<div class="rss">
				<div>Наша лента новостей<img src="<?php bloginfo('template_directory'); ?>/images/rss.jpg"></div>
				<input type="text" id="mailrss" value="введите ваш e-mail">
			</div>
		</div>
		</div>
		</div>
<? get_footer()  ?>
	</div>
	</body>
</html>