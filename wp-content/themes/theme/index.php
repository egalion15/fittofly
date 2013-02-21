

<?php get_header(); $ids=0; 


						function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
	}


?>
<div class="b-content">
            <div class="b-content__column b-content__column_type_left">
                  <div class="b-content__menu">
                    <h2>Продукция</h2>
                    <ul id="gray" class="treeview-black treeview">
					
<? get_sidebar();  ?>


</ul>
                </div>

                <div class="b-banner">
                    <?php   include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php'); ?>
                    <i></i>
                </div>
				  <div style="display: none;" class="b-banner">
                    <?php //$the_query = new WP_Query( 'pagename=levyj-banner ' ); while ( $the_query->have_posts() ) : $the_query->the_post();
//	the_content();  endwhile;wp_reset_postdata();?>
                    <i></i>
                </div>
            </div>

            <div class="b-content__center">
                
                   <?php if(is_front_page()){?> <div class="b-content__logo">
				    <ul id="controls">
<li><div  id="b1" class="nosel" ></div></li>
<li><div  id="b2" class="nosel" ></div></li>
<li><div  id="b3" class="nosel" ></div></li>
</ul>
				   <div id="MySlideshow">
				  
				   <? query_posts('cat=22'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
 <? 
  $ids+=1 ;
  
         if ( has_post_thumbnail()) { 

   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
?>

  <div id="slide<?    echo "$ids"; ?>"> <a href="<? the_permalink() ?>"> <?
  echo   get_the_post_thumbnail($post->ID,  array(555,324)); ?> </div> <?
 
 } 

        
   
        

  ?></a>
	   
<?php   endwhile; else: ?>
<p>Извините, ничего не найдено.</p>
<?php endif; wp_reset_query(); ?>
                        <i></i>
						</div>
                    </div><?php } ?>
               
                <div class="b-content__main">
                    <div class="b-content-title"><?php if(is_front_page()) { ?><h2>НОВОСТИ</h2><?php } if(is_page('Продукция')) { ?><h2>ПРОДУКЦИЯ</h2><?php }  if( is_page('Статьи')){ ?><h2>СТАТЬИ</h2><?php } if( is_page('Контакты')) { ?><h2>КОНТАКТЫ</h2><?php } if( is_page('О компании')) { ?><h2>О КОМПАНИИ</h2><?php } ?></div>
                     <div class="minusmargin clearfix">
					<div class="clearfix" id="center" >

               <?php 
			    if(! is_front_page() ){
			   
			   global $wp_query;

			 
//$current_category = single_cat_title("", false);

$category_ID = $cat_ID = get_query_var('cat');                  //get_category_id($current_category);


	
			$categories =  get_categories("title_li=&depth=1&parent=".$category_ID."");

	 foreach($categories as $category) { 
	 

$count = $category->category_count;


?>
	 <a class="b-content-product__name" href="<? echo get_category_link( $category->term_id ); ?>">
	 <div class="lot">
	 <div class="b-content-product__title">
	 <? echo category_description($category->term_id);?>
		<a class="b-content-product__name" href="<? echo get_category_link( $category->term_id ); ?>"><? echo $category->name; ?></a>
	 </div>
	 </div>
	 </a>
	 <?
}

}




			   
			   
			   if( is_front_page() ){ $numpost=5;//сколько записей на одной странице нам надо вывести
if($paged>1) $offset=$numpost*($paged-1);
else $offset=0;//чтобы знать, с какой статьи начать, если это не первая страница
query_posts('cat=3&offset='.$offset.'&showposts='.$numpost); } ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<? if(is_page('Контакты')) { ?>  <? the_content();?>  <? } ?>
					
					<?php if (is_category('3')){ ?> <a href="<? the_permalink(); ?>">	<? the_title();?></a>  <br>                               <?php 
 if ( has_post_thumbnail()) {
 
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 ?>
  <div class="clearfix" ><a href="<? the_permalink(); ?>">  <? echo  '<div style="float:left;">'.get_the_post_thumbnail($post->ID,  array(144,144)).'</div>'; ?> <div class="b-content-text" style="width:330px; float:right;"><? the_excerpt();?> </div></a> </div><?
 
 } 
?><? }  elseif(!$categories) {?>

				    	<?   if(in_category('29') ) { ?>
				<div class="b-content-product">
						<div class="b-content-product__title">
                                <? if (!is_single()) { ?> <a class="b-content-product__name" href="<? the_permalink(); ?>"><? the_title(); ?></a> <? ; } else { ?> <span class="b-content-product__name" > <? the_title(); ?> </span> <? } ?>
                     

								
								
								
								
								
								
								
								</a>
                            </div>
							  <? if (!is_single()) { ?>
                            <a href="<? the_permalink(); ?>">
                              <?php 
 if ( has_post_thumbnail()) {
 
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 ?>
  <div class="b-content-product__icon b-content-product__icon_float_left">  <? echo   get_the_post_thumbnail($post->ID,  array(144,144)); ?> </div> <?
 
 } 
?>
                            </a>  <? } else { ?> <div class="b-content-text">   <? the_content(); ?> </div>  <? }  ?>
                            
                                <? if (!is_single()) { ?>  <div class="b-content-product__text"> <? the_excerpt(); ?> </div> <? } else {   }?>
                           
                                <? if (!is_single()) {  ?> <a class="b-content-product__info" href="<? the_permalink(); ?>">Подробней »</a> <? } ?>
					</div>
				
                    <?php  ?>

					
<? } ?>

<?php  }  endwhile; else: ?>
<p>Извините, ничего не найдено.</p>
<?php endif;  ?>

</div>
                    </div>
                </div>
                <div class="b-content__nav">

   <?php if(!$count){ if(function_exists('wp_page_numbers')) { wp_page_numbers(); } } ?>

                   
                </div>
            </div>

            <div class="b-content__column b-content__column_type_right">
                <div class="b-content__menu b-content__menu_type_right">
                    <h2>Производители</h2>
                    <div style="background: url('http://dev2.tadatuta.com/vova/ea-digital/wp-content/themes/eadigital/img/all-brend.jpg') no-repeat; width:186px; height:710px;"> </div>

                    <?
                    /*

                        <ul>
                            <li><a href="<?php bloginfo('home'); ?>/category/celiane/">Celiane</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/valena/">Valena</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/galea-life/">Galea Life</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/galea/">Galea</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/sagane/">Sagane</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/suno/">Suno</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/cariva/">Cariva</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/garby/">Garby</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/garby-colonial/">Garby Colonial</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/venezia-carre">Venezia Carre</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/f-37">F-37</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/eunea-unica-plus/">Eunea Unica Plus</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/unica-top/">Unica Top</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/living-international/">Living International</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/light/">Light</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/category/light-tech/">Light Tech</a></li>
                            
                        </ul>
                    */
        ?>

                </div>
                <div  style="display: none; class="b-banner">
                    <?php //$the_query = new WP_Query( 'pagename=banner ' ); while ( $the_query->have_posts() ) : $the_query->the_post();
	//the_content();  endwhile;wp_reset_postdata();?>
                    <i></i>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
