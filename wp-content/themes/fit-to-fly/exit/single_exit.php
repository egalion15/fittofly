<!DOCTYPE HTML>

<html>


<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/styles/stylesingle.css" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/ui-slider.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
 <?php wp_head(); ?>


</head>

</head>
	<body>
	<div class="b-page__left"></div>
    <div class="b-page__right"></div> 
	<div class="b-page__imag"></div>	
	<div id="wrap" class="fix">	
		<? get_header() ;?>
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="#">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="#">Дневники Jukari</a></li><div class="dec"></div><li><a href="#">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
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
		<div id="shopwrap" class="fix">
<div id="leftblock">
			<div class="blocktitle">Каталог товаров</div>
			<div class="list">
			<span>Обувь</span>
			
			<ul>
			<?php wp_list_categories( 'child_of=12&exclude=14&title_li='); ?> 
			</ul>
			
			</div>
			<div class="list">
			<span>Тренажёры</span>
				<ul>
				<?php wp_list_categories( 'child_of=13&exclude=14,12&title_li='); ?> 
				</ul>
			</div>
		
		</div>
		
		<div id="center">
	
	
		<div class="centertitle">	<div id="cwrap">
		
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

</div></div>		
			<div id="mwrap">
			
				<? if (have_posts()) : while (have_posts()) : the_post(); ?>
				
       <?php
$selected_value = simple_fields_get_post_value(get_the_id(), "Bigimg", true);
$theImageURL = wp_get_attachment_url($selected_value);

?>       <?php
$selected_values1 = simple_fields_get_post_value(get_the_id(), "small1", true);
$theImageURLs1 = wp_get_attachment_url($selected_values1);

?>       <?php
$selected_values2 = simple_fields_get_post_value(get_the_id(), "small2", true);
$theImageURLs2 = wp_get_attachment_url($selected_values2);

?>  <?php
$selected_values3 = simple_fields_get_post_value(get_the_id(), "small3", true);
$theImageURLs3 = wp_get_attachment_url($selected_values3);

?>
		
		
		
		<? $post_text_color = get_post_meta($post->ID, "_simple_fields_fieldGroupID_3_fieldID_1_numInSet_0", true); ?>
		<? $post_text_decribe = get_post_meta($post->ID, "_simple_fields_fieldGroupID_3_fieldID_2_numInSet_0", true); ?>
		<? $post_text_tech = get_post_meta($post->ID, "_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0", true); ?>
		
				<div id="imgs">
				<img id="tfoto" width="315" height="295" src="<? echo "$theImageURL" ?>"/>
				<div id="mini">
				<a class="cboxElement" href="<? echo "$theImageURLs1" ?>"><img class="colorbox-<?echo $post->ID; ?>" width="62" height="62" src="<? echo "$theImageURLs1" ?>"></a>
				<a class="cboxElement" href="<? echo "$theImageURLs2" ?>"><img class="colorbox-<?echo $post->ID; ?>" width="62" height="62" src="<? echo "$theImageURLs2" ?>"></a>
				<a class="cboxElement" href="<? echo "$theImageURLs3" ?>"><img  class="colorbox-<?echo $post->ID; ?>" width="62" height="62" src="<? echo "$theImageURLs3" ?>"></a>
				</div>
				</div>
				<div id="infoblock">
				
				<h2><? the_title(); ?></h2>
				
				<div id="infotext">
				<div>
				<b>Цвет:</b>
				</div>
				<? echo "$post_text_color" ?>
				<div>
				<b>Описание:</b>
				<? echo "$post_text_decribe" ?>
				</div>
				<div>
				<b>Технологии</b>
				<? echo "$post_text_tech" ?>
				</div>
				<div style="margin-right:55px; width:340px;">
                    <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,friendfeed,moikrug"></div>

				</div>
				</div>
				
				</div>
							<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  wp_reset_query();  ?>
			</div>
			</div>
			
		</div>
	
		
			<? get_footer()  ?>
			</div>
		</div>
	</div>
	</body>
</html>