<? get_header(); 
/*
$selected_values = simple_fields_get_post_group_values("14", "Slideshow", true,2);

foreach($selected_values as $value => $one){
echo $one['URL'];
echo $one['Слайд'];
echo $one['Текст'];
echo $one['Фон слайда'];

}*/
?>
<link href="<?php bloginfo('template_directory'); ?>/styles/slider.css" rel="stylesheet">
	
<div id="slideshow">
    <div id="controls">
        <div id="arrowleft"></div>
        <div id="arrowright">
    </div>
</div>

<ul id="slides">
	<li>
        <a href="http://fittofly.com.ua/category/dnevniki">
            <div style=" background: url('<?php bloginfo('template_directory'); ?>/styles/images/img21.jpg') no-repeat 0 3px ; " class="slide"></div>
            <div class="bgcenter-for-text blue-bg">
                <div class="text-center">
				<h1>Дневники <br/>Fit to Fly </h1>
				<p class="">Откровенные истории перевоплощений </p>
				</div>
            </div>
        </a>
    </li>
	<li>
        <a href="http://fittofly.com.ua/category/trenirovka">
            <div style=" background: url('<?php bloginfo('template_directory'); ?>/styles/images/tren.jpg') no-repeat 0 3px ; " class="slide"></div>
            <div class="bgcenter-for-text green-bg">
                <div class="text-center">
				<p class="g_p">30 минут на перевоплощение</p>
				<br/>
				<h1>Революционная  
				<p class="g_p2">экспресс- тренировка</p>
				</h1>
				<p>+ уникальное оборудование.</p>
				</div>
            </div>
        </a>
    </li>
	<li>
        <a href="http://fittofly.com.ua/klub-v-sisteme-fit-to-fly">
            <div style=" background: url('<?php bloginfo('template_directory'); ?>/styles/images/map.jpg') no-repeat 0 3px ; " class="slide"></div>
            <div class="bgcenter-for-text red-bg">
                <div class="text-center">
				<h1>Клуб в системе <br/>Fit to Fly</h1>
					<div class="p_wrap">
					<p style="width: 45px;"><a href="#">Найти<br/>клуб</a></p>
					<p><a href="#">Проявить интерес</a></p>
					<p><a href="#">Открыть свой клуб</a></p>
					<p><a href="#">Поделится с друзьями</a></p>
					<div>
				</div>
            </div>
        </a>
    </li>
	<li>
        <a href="http://fittofly.com.ua/category/wellness-programma">
            <div style=" background: url('<?php bloginfo('template_directory'); ?>/styles/images/61.jpg') no-repeat 0 3px ; " class="slide"></div>
            <div class="bgcenter-for-text yellow-bg">
                <div class="text-center y_wr">
				<h1>Wellness программа<br> клуба Fit to Fly</h1>
				<ul class="y_ul">
					<li>фитнес</li>
					<li>программа правильного питания</li>
					<li>тренинги</li>
				</div>
            </div>
        </a>
    </li>
	<li>
        <a href="http://fittofly.com.ua/category/novosti-i-akcii">
            <div style=" background: url('<?php bloginfo('template_directory'); ?>/styles/images/face.jpg') no-repeat 0 3px ; " class="slide"></div>
            <div class="bgcenter-for-text purple-bg">
                <div class="text-center">
				<h1>Акции и новости Fit to Fly</h1>
				<p style="text-decoration: underline;">Подробнее...</p>
				</div>
            </div>
        </a>
    </li>
</ul>

</div>
<div id="bottomb"></div>


<div id="menu">
    <div id="mleft"></div>

    <ul id="nav">

        <?php wp_nav_menu('menu=top'); ?>


</div>
<div id="precont">
    <div class="content">
        <div id="contentwrap">
            <? query_posts('cat=20&posts_per_page=3'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="new">
                <div class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                <? if (has_post_thumbnail()) { ?>
                <div class="image "><?


                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                    ?>
                    <?
                    echo   get_the_post_thumbnail($post->ID, array(300, 222)); ?> </div> <? }?>
                <div class="text fix"><? the_excerpt();?></div>
            </div>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif;  wp_reset_query(); ?>
        </div>
    </div>
	
    <div class="rblock">
        <h1 class="buy"><a href="http://fittofly.com.ua/otkryt-svoj-klub">Открыть свой клуб</a></h1>
    </div>
	
	<div class="rblock">
		<div class="news_teaser">
			<div class="vert_prev"></div>
			<div class="teaser">
			
				<ul>
					<? wp_reset_query(); ?>
						<?php query_posts('cat=20'); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li>
							<p><a href="<? the_permalink(); ?>"><? the_title(); ?></p>
                <? if (has_post_thumbnail()) { ?>
                <br/><? $thumbnail_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); ?>
                    <? echo   get_the_post_thumbnail($post->ID, array(200, 222)); ?> </p> <? }?></a> 
						</li>
					<?php endwhile; endif; ?> 
				</ul>
			</div>
			<div class="vert_next"></div>
		</div>
	</div>
	<script>
		$(".teaser").jCarouselLite({
			btnNext: ".vert_next",
			btnPrev: ".vert_prev",
			vertical: true,
			auto: 3000,
			speed: 3200
		});
	</script>
	
    <div class="rblock bg">
        <div class="contacts" itemscope itemtype="http://schema.org/Person">
			<h1 itemprop="description">Контакты для связи</h1>
			<h2 itemprop="name">Анастасия</h2>
			<p>E-mail: <a href="mailto:masterfitfly@yandex.ru" itemprop="email">masterfitfly@yandex.ru</a>
			<p itemprop="telephone">МТС: 0990416776</p>
			<p itemprop="telephone">Лайф: 0637984264</p>
		</div>
        <div class="contacts" style="margin: -15px 0 3px 0;" itemscope itemtype="http://schema.org/Person">
			<h2 itemprop="name">Константин</h2>
			<p itemprop="telephone">Лайф: 0931478848</p>
		</div>
    </div>
	
	
    <div class="rblock">
        <div id="vkwrap">
			<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?49"></script>
			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 0, width: "227", height: "290"}, 37755454);
			</script></div>
		</div>

</div>


<? get_footer() ?>
</div>
</body>
</html>