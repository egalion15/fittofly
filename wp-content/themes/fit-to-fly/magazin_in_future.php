<?php
/*
Template Name: shop
*/
?>
<!DOCTYPE HTML>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<? // <link href="<?php bloginfo('template_directory'); /styles/styleshop.css" rel="stylesheet"> ?>
<link href="<?php bloginfo('template_directory'); ?>/styles/styledairy.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/styles/jqueryui.css" rel="stylesheet">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>



 <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script> 



     <?php wp_head(); ?>
		<script type="text/javascript">
			$(function(){
     $('#slider').slider();
	});
</script>

</head>
<? /* if(is_category("17")){ ?>
	<body>
	
	<?php 

if (isset($_GET['clothes'])) {$clothes=18; if($clothes=='')unset($clothes);}
if (isset($_GET['shoes'])) {$shoes=12; if($shoes=='')unset($shoes);}
if (isset($_GET['staff'])) {$staff=19; if($staff=='')unset($staff);}

if (isset($_GET['min'])) {$min=$_GET['min']; if($min=='')unset($min);}
if (isset($_GET['max'])) {$max=$_GET['max']; if($max=='')unset($max);}

if (isset($_GET['ord'])) {$ord=$_GET['ord']; if($ord=='')unset($ord);}

?>
	
	<div class="b-page__left"></div>
    <div class="b-page__right"></div> 
	<div class="b-page__imag"></div>	
	<div id="wrap" class="fix">	
<? get_header() ;?>
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/category/tovary">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники Jukari</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/svezhie-obsuzhdeniya">Свежие обсуждения</a></li>
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
       
        
		<div class="centertitle"><div id="fliterblock">

			<span id="hidefilter">Скрыть фильтр</span>
			<form name="filter" id="form" action="<?php echo bloginfo('home').'/magazin/' ?>" method="get">
			<div id="showlist">
			
			<h4>Показать:</h4>
			
			<ul>
			<li>
			<label>
			<input type="checkbox" name="clothes" value="yes" id="clothes" checked="checked">
			Одежда
			</label></li>
			<li><label>
			<input type="checkbox" name="shoes" value="yes" id="shoes" checked="checked" >
			Обувь
			</label></li>
			<li><label>
			
			<input type="checkbox" name="staff" value="yes" id="staff" checked="checked">
			Аксесуары
			</label></li>
		</div>
		<div id="sortlist">
			<h4>Сортировать по:</h4>
			
			<ul>
			<li>
			<label>
			<input type="radio" name="ord" value="_simple_fields_fieldGroupID_3_fieldID_9_numInSet_0" id="price" />
			Стоимости
			</label>
			</li>
			<li>
			<label>
			<input type="radio" name="ord" value="_simple_fields_fieldGroupID_3_fieldID_10_numInSet_0"  id="rate" CHECKED />
			Рейтингу
			</label></li>
			</div>
<div id="inputs">
			<input class="input" type="text" name="min" id="slider_min" value="50" />
            <label for="slider_min"l>от</label>
            <input  class="input" type="text" name="max" id="slider_max" value="400" /> <label for="slider_max"l>до</label>
            <div id="slider-range"></div>
                	<div id="slider"></div>
						               <input type="submit" value="Найти" />
</div>
			</form>
                              </div> <span id="filter">Фильтр</span></div>
		
				
 


		
		
	
		<div id="mwrap">
			

				 <?php 

         if( isset($_GET['shoes']) or $_GET['clothes'] or $_GET['staff'])
            { $args = array('orderby'=> meta_value,'meta_key'=> $ord,'order'   => 'DESC','meta_query' => array(

		array(
			'key' => '_simple_fields_fieldGroupID_3_fieldID_9_numInSet_0',
			'value' => array( $min, $max ),
            'type'=>'numeric',
			'compare' => 'BETWEEN'
		))

            );


          query_posts($args);
            }
            elseif(is_category())
          { }
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
		</div>
			<div class="merch">
			 <?php
$selected_value = simple_fields_get_post_value(get_the_id(), "Bigimg", true);
$theImageURL = wp_get_attachment_url($selected_value);

            
?>

		<a href="<? the_permalink(); ?>" class="imgwrap"> <img width="150" height="145" src="<? echo "$theImageURL"; ?>" ></a>

				<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
		

			<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;   ?>
			</div>
            <div id="pages">
<?php wp_page_numbers(); ?>

                </div>
			</div>

		</div>
    
		<? get_footer()  ?>
	</div>
		</div>
			
	</div>
     <script type="text/javascript">
     $('#slider').slider();
 </script>
	</body>
	<? } else { */?>
	<body>
	<div class="b-page__left"></div>
    <div class="b-page__right"></div> 
	<div class="b-page__imag"></div>	
	<div id="wrap" class="fix">	

		<? get_header() ;?>
		
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники Jukari</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="#">Свежие обсуждения</a></li>
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
		<? $numpost=4; if($paged>1) $offset=$numpost*($paged-1); else $offset=0; query_posts('offset='.$offset.'&showposts='.$numpost); ?>
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
				<div class="btns"><?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?></div>
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