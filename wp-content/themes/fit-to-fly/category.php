<? get_header(); ?>

<div id="menu">
    <div id="mleft"></div>

    <ul id="nav">
        <?php wp_nav_menu('menu=top'); ?>
    </ul>

</div>
<div id="precont">
    <div class="content">
		<div class="centertitle"><div id="cwrap"><div class="breadcrumbs">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}?>
	</div></div></div>
        <div id="contentwrap">

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
            <?php endif;  ?>

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

</div>


<? get_footer() ?>
</div>
</body>
</html>