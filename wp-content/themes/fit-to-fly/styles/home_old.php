<? get_header(); ?>

<div id="slideshow">
    <div id="controls">
        <div id="arrowleft" onclick="perv()"></div>
        <div id="arrowright" onclick="next()"></div>
    </div>

    <? $url1 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_2_numInSet_0", true); ?>
    <? $left_img1 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0", true); ?>
    <? $left_img_src = wp_get_attachment_url($left_img1, 'thumbnail');?>
    <? $left_text = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_7_numInSet_0", true); ?>


    <? $url2 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_4_numInSet_0", true); ?>
    <? $center_img1 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_3_numInSet_0", true); ?>
    <? $center_img_src = wp_get_attachment_url($center_img1, 'thumbnail');?>
    <? $center_text = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_8_numInSet_0", true); ?>


    <? $url3 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_6_numInSet_0", true); ?>
    <? $right_img1 = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_5_numInSet_0", true); ?>
    <? $right_img_src = wp_get_attachment_url($right_img1, 'thumbnail');?>
    <? $right_text = get_post_meta(14, "_simple_fields_fieldGroupID_2_fieldID_9_numInSet_0", true); ?>

    <div id="slide-center">
        <a href="<? echo "$url2"; ?>" id="urlc">
            <img src="<? echo "$center_img_src"?>" id="center">

            <div id="bgcenter-for-text">
                <div id="text-center"><? echo "$center_text"; ?></div>
            </div>

        </a>
    </div>

    <div id="slide-left">
        <a href="<? echo "$url1"; ?>" id="urll">
            <img src="<? echo "$left_img_src"?>" id="left">

            <div id="bgleft-for-text">
                <div id="text-left"><? echo "$left_text";?></div>
            </div>
        </a>
    </div>
    <img src="<? echo "$right_img_src"?>" id="right">

    <div id="slide-right">
        <a href="<? echo "$url3"; ?>" id="urlr">

            <div id="bgright-for-text">
                <div id="text-right"><? echo "$right_text"; ?></div>
            </div>
        </a>
    </div>


    <div id="bottomb"></div>
</div>

<div id="menu">
    <div id="mleft"></div>

    <ul id="nav">
        <li id="show"><a href="<?php bloginfo('home'); ?>/">О Fit to Fly</a></li>
        <div class="dec"></div>
        <li><a href="<?php bloginfo('home'); ?>/programma-trenirovok">Программа тренировок</a></li>
        <div class="dec"></div>
        <li><a href="<?php bloginfo('home'); ?>/klub-v-sisteme-fit-to-fly">Клуб в системе Fit to Fly</a></li>
        <div class="dec"></div>
        <li><a href="<?php bloginfo('home'); ?>/istorii-perevoploshheniya">Истории перевоплощения</a></li>
        <div class="dec"></div>
        <li><a href="<?php bloginfo('home'); ?>/klubnaya-zhizn-2">Клубная жизнь</a></li>
    </ul>
    <div id="mright"></div>
    <div id="hwrap">

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
        <div id="contentwrap">
            <? query_posts('cat=14&posts_per_page=2'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="new">
                <div class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                <? if (has_post_thumbnail()) { ?>
                <div class="image "><?


                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
                    ?>
                    <?
                    echo   get_the_post_thumbnail($post->ID, array(444, 444)); ?> </div> <? }?>
                <div class="text fix"><? the_excerpt();?></div>
            </div>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif;  wp_reset_query(); ?>
        </div>
    </div>
    <div class="rblock">
        <div id="fbwrap"><?php facebook_like_box('23822288801', '0', '3', '227', '210', '0', 'LOCALE'); ?></div>
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


<? get_footer() ?>
</div>
</body>
</html>