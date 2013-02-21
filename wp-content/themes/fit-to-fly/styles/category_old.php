<?php
/*
Template Name:shop
*/
?>
<!DOCTYPE HTML>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/styles/styleshop.css" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/ui-slider.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
 <?php wp_head(); ?>


</head>
	<body>
	<div id="wrap" class="fix">	
<? get_header() ;?>
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="#">Поиск клубов</a></li><div class="dec"></div><li><a href="#">Каталог товаров</a></li><div class="dec"></div><li><a href="#">Дневники Jukari</a></li><div class="dec"></div><li><a href="#">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
			</ul><div id="mright"></div>
			
		</div>
		<div id="shopwrap" class="fix">
		<div id="leftblock">
			<div class="blocktitle">Каталог товаров</div>
			<div class="list">
			<span>Обувь</span>
			<?php $args = array(
			
			'echo'               => 1
			); ?>
			<ul>
			<?php wp_list_categories( $args ); ?> 
			</ul>
				<ul>
				<li><a href="<?php bloginfo('name'); ?>/amerikanskij-futbol">Американский футбол</a></li>
				<li><a href="<?php bloginfo('name'); ?>/bejsbol">Бейсбол</a></li>
				<li><a href="<?php bloginfo('name'); ?>/bsketbol">Бскетбол</a></li>
				<li><a href="<?php bloginfo('name'); ?>/xokkej">Хоккей</a></li>
				<li id="currentli"><a href="<?php bloginfo('name'); ?>/futbol">Бег</a></li>
				<li><a href="<?php bloginfo('name'); ?>/futbol">Футбол</a></li>
				<li><a href="<?php bloginfo('name'); ?>/tennis">Теннис</a></li>
				<li><a href="<?php bloginfo('name'); ?>/muzhskaya-obuv-dlya-trenirovok">Мужская обувь для тренировок</a></li>
				<li><a href="<?php bloginfo('name'); ?>/fitnes-zhenshhiny">Фитнес (Женщины)</a></li>
				</ul>
			</div>
			<div class="list">
			<span>Тренажёры</span>
				<ul>
				<li><a href="#">Американский футбол</a></li>
				<li><a href="#">Бейсбол</a></li>
				</ul>
			</div>
		
		</div>
		
		<div id="center">
		<div id="fliterblock">
			<span id="hidefilter">Скрыть фильтр</span>
			<form name="filter" method="post" id="form">
			<div id="showlist">
			<h4>Показать:</h4>
			
			<ul>
			<li>
			<label>
			<input type="checkbox" name="check" value="clothes">
			Одежда
			</label></li>
			<li><label>
			<input type="checkbox" name="check" value="shoes">
			Обувь
			</label></li>
			<li><label>
			
			<input type="checkbox" name="check" value="staff">
			Аксесуары
			</label></li>
		</div>
		<div id="sortlist">
			<h4>Сортировать по:</h4>
			
			<ul>
			<li>
			<label>
			<input type="radio" name="sort" value="price" /> 
			Стоимости
			</label>
			</li>
			<li>
			<label>
			<input type="radio" name="sort" value="rate" /> 
			Рейтингу
			</label></li>
			</div>
			<input type="text" id="minCost" value="0"/>
	<input type="text" id="maxCost" value="1000"/>
<div id="slider"></div>
		<form>
		
		</div>
		<div class="centertitle"> <span id="filter">Фильтр</span></div>		
		<div id="mwrap">
		<? query_posts('cat=12'); ?>
		<? if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="merch">
			<?php 
 if ( has_post_thumbnail()) {
 
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 ?>
 <? echo   get_the_post_thumbnail($post->ID,  array(150,146)); } ?>
			
				<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
		
			</div>
			<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  wp_reset_query(); ?>
			
			</div>
			<div id="pagenavi">
				<div class="btns"><span class="nbtn">В начало</span><span class="nbtn"> < Предыдущая</span></div>	<span>1</span><span> 2</span>	<span class="navicur">3</span><span> 4</span><span> 5</span><div class="btns "><span class="nbtn"> Следующая > </span><span class="nbtn"> В конец </span></div>
			</div>
		</div>
	
		</div>
			<? get_footer()  ?>
	</div>
	</body>
</html>