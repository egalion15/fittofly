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
<link href="<?php bloginfo('template_directory'); ?>/styles/jquery-ui-1.8.16.custom.css" rel="stylesheet">

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-ui-1.8.16.custom.min.js"></script>

 <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>

 <?php wp_head(); ?>


</head>
	<body>
	
	<?php 

if (isset($_GET['clothes'])) {$clothes=18; if($clothes=='')unset($clothes);}
if (isset($_GET['shoes'])) {$shoes=12; if($shoes=='')unset($shoes);}
if (isset($_GET['staff'])) {$staff=19; if($staff=='')unset($staff);}

if (isset($_GET['min'])) {$min=$_GET['min']; if($min=='')unset($min);}
if (isset($_GET['max'])) {$max=$_GET['max']; if($max=='')unset($max);}

if (isset($_GET['ord'])) {$ord=$_GET['ord']; if($ord=='')unset($ord);}

?>
	
	
	<div id="wrap" class="fix">	
<? get_header() ;?>
		<div id="menu"><div id="mleft"></div>
			
			<ul id="nav"><li id="show" ><a href="<?php bloginfo('home'); ?>/poisk-klubov">Поиск клубов</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/magazin">Каталог товаров</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/dnevniki-jukari">Дневники Jukari</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li><div class="dec"></div><li><a href="<?php bloginfo('home'); ?>/svezhie-obsuzhdeniya">Свежие обсуждения</a></li>
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
			<input type="radio" name="ord" value="price" id="price" /> 
			Стоимости
			</label>
			</li>
			<li>
			<label>
			<input type="radio" name="ord" value="rate"  id="rate" CHECKED /> 
			Рейтингу
			</label></li>
			</div>
			<div id="slider"></div>
			                        <input type="text" name="min" id="slider_min" />
                        <input type="text" name="max" id="slider_max" />
                        <div id="slider-range"></div>
						               <input type="submit" value="Найти в базе" />
		<button id="btn">start</button>
            <div id="slider-range"></div>
			</form>
                     </div> <span id="filter">Фильтр</span></div>	
		
				
 

	
		
		
		
		<div id="mwrap">
			
				
				 <?php  /* if (is_front_page() || is_category() || is_search () || isset($shoes) || isset($clothes) || ($staff) || ($max) || ($ord)) {
$args = array_merge( $wp_query->query,array('orderby'=> meta_value,'meta_key'=> $ord,'order'   => 'ASC','meta_query' => array(
                        array(
                            'key' => '_simple_fields_fieldGroupID_3_fieldID_8_numInSet_0',
                            'value' => array($clothes,$shoes,$staff),
                            'compare'=> 'IN'
                        ),
                        array(
                            'key' => '_simple_fields_fieldGroupID_3_fieldID_9_numInSet_0',
                            'value' => array( $min, $max ),
                            'type'=>'numeric',
                            'compare' => 'BETWEEN'
                        )
                    )));*/
                  ?>
					    <?php  $args = 'cat=' .$shoes. ',' .$clothes . ','.$staff.'&BETWEEN='; 
			


						
						
		if ( isset($shoes) || isset($clothes) || ($staff) || ($max) || ($ord))	
		
						{	query_posts( $args); 	 } else {$numpost=12; if($paged>1) $offset=$numpost*($paged-1); else $offset=0; query_posts('cat=-14&offset='.$offset.'&showposts='.$numpost); }  ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		</div>	
			<div class="merch">
			 <?php
$selected_value = simple_fields_get_post_value(get_the_id(), "Bigimg", true);
$theImageURL = wp_get_attachment_url($selected_value);

?>
 <img width="150" height="145" src="<? echo "$theImageURL"  ?>"  >
			<div id="pagenavi">
				<div class="btns"><?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?></div>
			</div>
				<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
		
		
			<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  ?>
			

			</div>
		<div id="pagenavi">
				<div class="btns"><?php  wp_page_numbers();  ?></div>
			</div>
			</div>
		</div>
		<? get_footer()  ?>
	</div>
		</div>
			
	</div>
	</body>
</html>