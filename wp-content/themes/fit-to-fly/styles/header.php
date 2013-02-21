<!DOCTYPE HTML>

<html <?php body_class(); ?>>
<head>

     <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('template_directory'); ?>/styles/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/styles/images/favicon.ico" />
	
    <?php wp_head(); ?>

    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jcarousellite_1.0.1.min.js"></script>
	
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.roundabout2.js"></script>


    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/scripts.js"></script>
	
	
	<!--<script type="text/javascript">/*<![CDATA[*/
$(function(){
	//Get our elements for faster access and set overlay width
	var div = $('div.slideshowu'),
		ul = $('ul.slides'),
		ulPadding = 15;
	
	//Get menu width
	var divWidth = div.width();

	//Remove scrollbars	
	div.css({overflow: 'hidden'});
	
	//Find last image container
	var lastLi = ul.find('li:last-child');
	
	//When user move mouse over menu
	div.mousemove(function(e){
		//As images are loaded ul width increases,
		//so we recalculate it each time
		var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;	
		var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
		div.scrollLeft(left);
	});
});
/*]]>*/</script>-->


<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?49"></script>

<script type="text/javascript">
  VK.init({apiId: API_ID, onlyWidgets: true});
</script>


</head>

<body >


<!--<div class="b-page__left"></div> -->
<!--<div class="b-page__right"></div> -->
<!--<div class="b-page__imag"></div> -->

<!--<div class="b-page__header"></div> -->
<!--<div class="b-page__body"></div> -->
<!--<div class="b-page__footer"></div>  -->



<div id="wrap" class="fix">




<div id="head">

    <div id="logo">
        <a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/styles/images/logo.png"
                                                  id="logo"></a><img
        src="<?php bloginfo('template_directory'); ?>/styles/images/diviz.png" id="diviz">
    </div>
    <div id="login">
        <div id="reg"><?php if (!is_user_logged_in()) { ?> <a href="<?php bloginfo('home'); ?>/wp-login.php">Войдите</a>
            / <a href="<?php bloginfo('home'); ?>/wp-login.php?action=register">Зарегистрируйтесь</a> <? } else { ?> <a
            href="<?php echo wp_logout_url(); ?>" title="Logout">Выйти</a> <? }?></div>
        <form class="search" method="GET" action="">
            <input id="search" type="text" class="search_inp"
                   onblur="this.value=(this.value=='') ? 'Поиск по сайту' : this.value;"
                   onfocus="this.value=(this.value=='Поиск по сайту') ? '' : this.value;" value="Поиск по сайту"
                   name="s" id="s">
            <input type="submit" id="search_button" value=""></form>
    </div>
</div>