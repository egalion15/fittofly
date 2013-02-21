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
	<div id="wrap" class="fix">	
		<? get_header() ;?>
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="#">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="#">Дневники Jukari</a></li><div class="dec"></div><li><a href="#">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
			</ul><div id="mright"></div>
			
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
		

				<img id="tfoto" width="315" height="295" src="<? echo "$theImageURL" ?>">
				
				<div id="infoblock">
				
				<h2><? the_title(); ?></h2>
				
				<div id="infotext">
				<b>Цвет:</b>
				<? echo "$post_text_color" ?>
				<b>Описание:</b>
				<? echo "$post_text_decribe" ?>
				<b>Технологии</b>
				<? echo "$post_text_tech" ?>
				</div>
				<a href="<? echo "$theImageURLs1" ?>"><img id="tfoto" width="62" height="62" src="<? echo "$theImageURLs1" ?>"></a>
				<a href="<? echo "$theImageURLs2" ?>"><img id="tfoto" width="62" height="62" src="<? echo "$theImageURLs2" ?>"></a>
				<a href="<? echo "$theImageURLs3" ?>"><img id="tfoto" width="62" height="62" src="<? echo "$theImageURLs3" ?>"></a>
				</div>
							<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  wp_reset_query(); ?>
			</div>
			</div>
			
		</div>
	
		
			<? get_footer()  ?>
			</div>
		</div>
	</div>
	</body>
</html>