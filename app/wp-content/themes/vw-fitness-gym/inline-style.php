<?php

	$vw_fitness_gym_first_color = get_theme_mod('vw_fitness_gym_first_color');

	/*------------------------------ Global First Color -----------*/

	$vw_fitness_gym_custom_css = " ";

	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='.woocommerce span.onsale,#sidebar .tagcloud a:hover,.pagination a:hover,.pagination .current,#sidebar h3,#comments input[type="submit"],#footer-2,input[type="submit"],#sidebar .custom-social-icons i, #footer .custom-social-icons i,.search-box i,.top-btn a:hover,.slider-btn a:before,.more-btn a,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#footer .tagcloud a:hover,nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .wp-block-button__link, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label{';
			$vw_fitness_gym_custom_css .='background-color: '.esc_attr($vw_fitness_gym_first_color).';';
		$vw_fitness_gym_custom_css .='}';
	}
	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='#footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.serv-box h4 a:hover,.more-btn a:hover,#topbar .custom-social-icons i:hover,#topbar span i,#sidebar ul li a:hover,.info-box i,a,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-main-box:hover h2,.serv-box a,#footer li a:hover,a.scrollup, .post-main-box:hover h2 a, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #comments a.comment-reply-link:hover, #sidebar a.custom_read_more:hover, #footer a.custom_read_more:hover, .post-main-box:hover .entry-date a, .post-main-box:hover .entry-author a, .single-post .post-info:hover .entry-date a, .single-post .post-info:hover .entry-author a, #topbar span a:hover, #slider .inner_carousel h1 a:hover{';
			$vw_fitness_gym_custom_css .='color: '.esc_attr($vw_fitness_gym_first_color).';';
		$vw_fitness_gym_custom_css .='}';
	}
	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='.wp-block-button .wp-block-button__link:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$vw_fitness_gym_custom_css .='color: '.esc_attr($vw_fitness_gym_first_color).'!important;';
		$vw_fitness_gym_custom_css .='}';
	}
	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='.top-btn a, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .tagcloud a:hover, .loader-line{';
			$vw_fitness_gym_custom_css .='border-color: '.esc_attr($vw_fitness_gym_first_color).';';
		$vw_fitness_gym_custom_css .='}';
	}
	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='#header .main-navigation a:hover,#footer h3:after, .main-navigation a:hover, .header-fixed, .main-navigation ul ul, #footer .wp-block-search .wp-block-search__label:after{';
			$vw_fitness_gym_custom_css .='border-bottom-color: '.esc_attr($vw_fitness_gym_first_color).';';
		$vw_fitness_gym_custom_css .='}';
	}
	if($vw_fitness_gym_first_color != false){
		$vw_fitness_gym_custom_css .='.logo, .main-navigation a:hover, .main-navigation ul ul{';
			$vw_fitness_gym_custom_css .='border-top-color: '.esc_attr($vw_fitness_gym_first_color).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_custom_css .='@media screen and (max-width:992px) {';
		if($vw_fitness_gym_first_color != false){
			$vw_fitness_gym_custom_css .='.logo{
			background-color:'.esc_attr($vw_fitness_gym_first_color).';
			}';
		}
	$vw_fitness_gym_custom_css .='}';

	/*----------------Width Layout -------------------*/

	$vw_fitness_gym_theme_lay = get_theme_mod( 'vw_fitness_gym_width_option','Full Width');
    if($vw_fitness_gym_theme_lay == 'Boxed'){
		$vw_fitness_gym_custom_css .='body{';
			$vw_fitness_gym_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_fitness_gym_custom_css .='max-width: 97%;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='#slider .carousel-control-prev, #slider .carousel-control-next{';
			$vw_fitness_gym_custom_css .='bottom: 5%;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.scrollup i{';
		  $vw_fitness_gym_custom_css .='right: 100px;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.scrollup.left i{';
		  $vw_fitness_gym_custom_css .='left: 100px;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Wide Width'){
		$vw_fitness_gym_custom_css .='body{';
			$vw_fitness_gym_custom_css .='width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.scrollup i{';
		  $vw_fitness_gym_custom_css .='right: 30px;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.scrollup.left i{';
		  $vw_fitness_gym_custom_css .='left: 30px;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Full Width'){
		$vw_fitness_gym_custom_css .='body{';
			$vw_fitness_gym_custom_css .='max-width: 100%;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_fitness_gym_theme_lay = get_theme_mod( 'vw_fitness_gym_slider_opacity_color','0.2');
	if($vw_fitness_gym_theme_lay == '0'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.1'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.1';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.2'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.2';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.3'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.3';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.4'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.4';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.5'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.5';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.6'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.6';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.7'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.7';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.8'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.8';
		$vw_fitness_gym_custom_css .='}';
		}else if($vw_fitness_gym_theme_lay == '0.9'){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='opacity:0.9';
		$vw_fitness_gym_custom_css .='}';
		}

	/*-------------------Slider Content Layout -------------------*/

	$vw_fitness_gym_theme_lay = get_theme_mod( 'vw_fitness_gym_slider_content_option','Left');
    if($vw_fitness_gym_theme_lay == 'Left'){
		$vw_fitness_gym_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_fitness_gym_custom_css .='text-align:left; left:7%; right:50%;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Center'){
		$vw_fitness_gym_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_fitness_gym_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Right'){
		$vw_fitness_gym_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_fitness_gym_custom_css .='text-align:right; left:50%; right:7%;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_fitness_gym_slider_content_padding_top_bottom = get_theme_mod('vw_fitness_gym_slider_content_padding_top_bottom');
	$vw_fitness_gym_slider_content_padding_left_right = get_theme_mod('vw_fitness_gym_slider_content_padding_left_right');
	if($vw_fitness_gym_slider_content_padding_top_bottom != false || $vw_fitness_gym_slider_content_padding_left_right != false){
		$vw_fitness_gym_custom_css .='#slider .carousel-caption{';
			$vw_fitness_gym_custom_css .='top: '.esc_attr($vw_fitness_gym_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_fitness_gym_slider_content_padding_top_bottom).';left: '.esc_attr($vw_fitness_gym_slider_content_padding_left_right).';right: '.esc_attr($vw_fitness_gym_slider_content_padding_left_right).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_fitness_gym_slider_height = get_theme_mod('vw_fitness_gym_slider_height');
	if($vw_fitness_gym_slider_height != false){
		$vw_fitness_gym_custom_css .='#slider img{';
			$vw_fitness_gym_custom_css .='height: '.esc_attr($vw_fitness_gym_slider_height).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_fitness_gym_slider = get_theme_mod('vw_fitness_gym_slider_hide_show');
	if($vw_fitness_gym_slider == false){
		$vw_fitness_gym_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_fitness_gym_custom_css .='position: static;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_fitness_gym_theme_lay = get_theme_mod( 'vw_fitness_gym_blog_layout_option','Default');
    if($vw_fitness_gym_theme_lay == 'Default'){
		$vw_fitness_gym_custom_css .='.post-main-box{';
			$vw_fitness_gym_custom_css .='';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Center'){
		$vw_fitness_gym_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_fitness_gym_custom_css .='text-align:center;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.post-info{';
			$vw_fitness_gym_custom_css .='margin-top:10px;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.post-info hr{';
			$vw_fitness_gym_custom_css .='margin:10px auto;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_theme_lay == 'Left'){
		$vw_fitness_gym_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_fitness_gym_custom_css .='text-align:Left;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.post-info hr{';
			$vw_fitness_gym_custom_css .='margin-bottom:10px;';
		$vw_fitness_gym_custom_css .='}';
		$vw_fitness_gym_custom_css .='.post-main-box h2{';
			$vw_fitness_gym_custom_css .='margin-top:10px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_fitness_gym_resp_stickyheader = get_theme_mod( 'vw_fitness_gym_stickyheader_hide_show',false);
	if($vw_fitness_gym_resp_stickyheader == true && get_theme_mod( 'vw_fitness_gym_sticky_header',false) != true){
    	$vw_fitness_gym_custom_css .='.header-fixed{';
			$vw_fitness_gym_custom_css .='position:static;';
		$vw_fitness_gym_custom_css .='} ';
	}
    if($vw_fitness_gym_resp_stickyheader == true){
    	$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='.header-fixed{';
			$vw_fitness_gym_custom_css .='position:fixed;';
		$vw_fitness_gym_custom_css .='} }';
	}else if($vw_fitness_gym_resp_stickyheader == false){
		$vw_fitness_gym_custom_css .='@media screen and (max-width:575px){';
		$vw_fitness_gym_custom_css .='.header-fixed{';
			$vw_fitness_gym_custom_css .='position:static;';
		$vw_fitness_gym_custom_css .='} }';
	}

	$vw_fitness_gym_resp_slider = get_theme_mod( 'vw_fitness_gym_resp_slider_hide_show',false);
	if($vw_fitness_gym_resp_slider == true && get_theme_mod( 'vw_fitness_gym_slider_hide_show', false) == false){
    	$vw_fitness_gym_custom_css .='#slider{';
			$vw_fitness_gym_custom_css .='display:none;';
		$vw_fitness_gym_custom_css .='} ';
	}
    if($vw_fitness_gym_resp_slider == true){
    	$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='#slider{';
			$vw_fitness_gym_custom_css .='display:block;';
		$vw_fitness_gym_custom_css .='} }';
	}else if($vw_fitness_gym_resp_slider == false){
		$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='#slider{';
			$vw_fitness_gym_custom_css .='display:none;';
		$vw_fitness_gym_custom_css .='} }';
	}

	$vw_fitness_gym_sidebar = get_theme_mod( 'vw_fitness_gym_sidebar_hide_show',true);
    if($vw_fitness_gym_sidebar == true){
    	$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='#sidebar{';
			$vw_fitness_gym_custom_css .='display:block;';
		$vw_fitness_gym_custom_css .='} }';
	}else if($vw_fitness_gym_sidebar == false){
		$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='#sidebar{';
			$vw_fitness_gym_custom_css .='display:none;';
		$vw_fitness_gym_custom_css .='} }';
	}

	$vw_fitness_gym_resp_scroll_top = get_theme_mod( 'vw_fitness_gym_resp_scroll_top_hide_show',true);
	if($vw_fitness_gym_resp_scroll_top == true && get_theme_mod( 'vw_fitness_gym_hide_show_scroll',true) != true){
    	$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='visibility:hidden !important;';
		$vw_fitness_gym_custom_css .='} ';
	}
    if($vw_fitness_gym_resp_scroll_top == true){
    	$vw_fitness_gym_custom_css .='@media screen and (max-width:575px) {';
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='visibility:visible !important;';
		$vw_fitness_gym_custom_css .='} }';
	}else if($vw_fitness_gym_resp_scroll_top == false){
		$vw_fitness_gym_custom_css .='@media screen and (max-width:575px){';
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='visibility:hidden !important;';
		$vw_fitness_gym_custom_css .='} }';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_fitness_gym_navigation_menu_font_size = get_theme_mod('vw_fitness_gym_navigation_menu_font_size');
	if($vw_fitness_gym_navigation_menu_font_size != false){
		$vw_fitness_gym_custom_css .='.main-navigation a{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_navigation_menu_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_nav_menus_font_weight = get_theme_mod( 'vw_fitness_gym_navigation_menu_font_weight','Default');
    if($vw_fitness_gym_nav_menus_font_weight == 'Default'){
		$vw_fitness_gym_custom_css .='.main-navigation a{';
			$vw_fitness_gym_custom_css .='';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_nav_menus_font_weight == 'Normal'){
		$vw_fitness_gym_custom_css .='.main-navigation a{';
			$vw_fitness_gym_custom_css .='font-weight: normal;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_sticky_header_padding = get_theme_mod('vw_fitness_gym_sticky_header_padding');
	if($vw_fitness_gym_sticky_header_padding != false){
		$vw_fitness_gym_custom_css .='.header-fixed{';
			$vw_fitness_gym_custom_css .='padding: '.esc_attr($vw_fitness_gym_sticky_header_padding).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_fitness_gym_search_padding_top_bottom = get_theme_mod('vw_fitness_gym_search_padding_top_bottom');
	$vw_fitness_gym_search_padding_left_right = get_theme_mod('vw_fitness_gym_search_padding_left_right');
	$vw_fitness_gym_search_font_size = get_theme_mod('vw_fitness_gym_search_font_size');
	$vw_fitness_gym_search_border_radius = get_theme_mod('vw_fitness_gym_search_border_radius');
	if($vw_fitness_gym_search_padding_top_bottom != false || $vw_fitness_gym_search_padding_left_right != false || $vw_fitness_gym_search_font_size != false || $vw_fitness_gym_search_border_radius != false){
		$vw_fitness_gym_custom_css .='.search-box i{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_search_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_fitness_gym_search_padding_top_bottom).';padding-left: '.esc_attr($vw_fitness_gym_search_padding_left_right).';padding-right: '.esc_attr($vw_fitness_gym_search_padding_left_right).';font-size: '.esc_attr($vw_fitness_gym_search_font_size).';border-radius: '.esc_attr($vw_fitness_gym_search_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_fitness_gym_button_padding_top_bottom = get_theme_mod('vw_fitness_gym_button_padding_top_bottom');
	$vw_fitness_gym_button_padding_left_right = get_theme_mod('vw_fitness_gym_button_padding_left_right');
	if($vw_fitness_gym_button_padding_top_bottom != false || $vw_fitness_gym_button_padding_left_right != false){
		$vw_fitness_gym_custom_css .='.post-main-box .more-btn a{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_fitness_gym_button_padding_top_bottom).';padding-left: '.esc_attr($vw_fitness_gym_button_padding_left_right).';padding-right: '.esc_attr($vw_fitness_gym_button_padding_left_right).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_button_border_radius = get_theme_mod('vw_fitness_gym_button_border_radius');
	if($vw_fitness_gym_button_border_radius != false){
		$vw_fitness_gym_custom_css .='.post-main-box .more-btn a{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_button_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_fitness_gym_featured_image_border_radius = get_theme_mod('vw_fitness_gym_featured_image_border_radius', 0);
	if($vw_fitness_gym_featured_image_border_radius != false){
		$vw_fitness_gym_custom_css .='.box-image img, .feature-box img{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_featured_image_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_featured_image_box_shadow = get_theme_mod('vw_fitness_gym_featured_image_box_shadow',0);
	if($vw_fitness_gym_featured_image_box_shadow != false){
		$vw_fitness_gym_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_fitness_gym_custom_css .='box-shadow: '.esc_attr($vw_fitness_gym_featured_image_box_shadow).'px '.esc_attr($vw_fitness_gym_featured_image_box_shadow).'px '.esc_attr($vw_fitness_gym_featured_image_box_shadow).'px #cccccc;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_single_blog_post_navigation_show_hide = get_theme_mod('vw_fitness_gym_single_blog_post_navigation_show_hide',true);
	if($vw_fitness_gym_single_blog_post_navigation_show_hide != true){
		$vw_fitness_gym_custom_css .='.post-navigation{';
			$vw_fitness_gym_custom_css .='display: none;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_single_blog_comment_title = get_theme_mod('vw_fitness_gym_single_blog_comment_title', 'Leave a Reply');
	if($vw_fitness_gym_single_blog_comment_title == ''){
		$vw_fitness_gym_custom_css .='#comments h2#reply-title {';
			$vw_fitness_gym_custom_css .='display: none;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_single_blog_comment_button_text = get_theme_mod('vw_fitness_gym_single_blog_comment_button_text', 'Post Comment');
	if($vw_fitness_gym_single_blog_comment_button_text == ''){
		$vw_fitness_gym_custom_css .='#comments p.form-submit {';
			$vw_fitness_gym_custom_css .='display: none;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_comment_width = get_theme_mod('vw_fitness_gym_single_blog_comment_width');
	if($vw_fitness_gym_comment_width != false){
		$vw_fitness_gym_custom_css .='#comments textarea{';
			$vw_fitness_gym_custom_css .='width: '.esc_attr($vw_fitness_gym_comment_width).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_fitness_gym_footer_background_color = get_theme_mod('vw_fitness_gym_footer_background_color');
	if($vw_fitness_gym_footer_background_color != false){
		$vw_fitness_gym_custom_css .='#footer{';
			$vw_fitness_gym_custom_css .='background-color: '.esc_attr($vw_fitness_gym_footer_background_color).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_copyright_font_size = get_theme_mod('vw_fitness_gym_copyright_font_size');
	if($vw_fitness_gym_copyright_font_size != false){
		$vw_fitness_gym_custom_css .='.copyright p{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_copyright_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_copyright_alingment = get_theme_mod('vw_fitness_gym_copyright_alingment');
	if($vw_fitness_gym_copyright_alingment != false){
		$vw_fitness_gym_custom_css .='.copyright p{';
			$vw_fitness_gym_custom_css .='text-align: '.esc_attr($vw_fitness_gym_copyright_alingment).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_copyright_padding_top_bottom = get_theme_mod('vw_fitness_gym_copyright_padding_top_bottom');
	if($vw_fitness_gym_copyright_padding_top_bottom != false){
		$vw_fitness_gym_custom_css .='#footer-2{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_fitness_gym_copyright_padding_top_bottom).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_fitness_gym_scroll_to_top_font_size = get_theme_mod('vw_fitness_gym_scroll_to_top_font_size');
	if($vw_fitness_gym_scroll_to_top_font_size != false){
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_scroll_to_top_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_scroll_to_top_padding = get_theme_mod('vw_fitness_gym_scroll_to_top_padding');
	$vw_fitness_gym_scroll_to_top_padding = get_theme_mod('vw_fitness_gym_scroll_to_top_padding');
	if($vw_fitness_gym_scroll_to_top_padding != false){
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_fitness_gym_scroll_to_top_padding).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_scroll_to_top_width = get_theme_mod('vw_fitness_gym_scroll_to_top_width');
	if($vw_fitness_gym_scroll_to_top_width != false){
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='width: '.esc_attr($vw_fitness_gym_scroll_to_top_width).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_scroll_to_top_height = get_theme_mod('vw_fitness_gym_scroll_to_top_height');
	if($vw_fitness_gym_scroll_to_top_height != false){
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='height: '.esc_attr($vw_fitness_gym_scroll_to_top_height).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_scroll_to_top_border_radius = get_theme_mod('vw_fitness_gym_scroll_to_top_border_radius');
	if($vw_fitness_gym_scroll_to_top_border_radius != false){
		$vw_fitness_gym_custom_css .='.scrollup i{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_scroll_to_top_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_fitness_gym_social_icon_font_size = get_theme_mod('vw_fitness_gym_social_icon_font_size');
	if($vw_fitness_gym_social_icon_font_size != false){
		$vw_fitness_gym_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_social_icon_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_social_icon_padding = get_theme_mod('vw_fitness_gym_social_icon_padding');
	if($vw_fitness_gym_social_icon_padding != false){
		$vw_fitness_gym_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_fitness_gym_custom_css .='padding: '.esc_attr($vw_fitness_gym_social_icon_padding).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_social_icon_width = get_theme_mod('vw_fitness_gym_social_icon_width');
	if($vw_fitness_gym_social_icon_width != false){
		$vw_fitness_gym_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_fitness_gym_custom_css .='width: '.esc_attr($vw_fitness_gym_social_icon_width).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_social_icon_height = get_theme_mod('vw_fitness_gym_social_icon_height');
	if($vw_fitness_gym_social_icon_height != false){
		$vw_fitness_gym_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_fitness_gym_custom_css .='height: '.esc_attr($vw_fitness_gym_social_icon_height).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_social_icon_border_radius = get_theme_mod('vw_fitness_gym_social_icon_border_radius');
	if($vw_fitness_gym_social_icon_border_radius != false){
		$vw_fitness_gym_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_social_icon_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_fitness_gym_related_product_show_hide = get_theme_mod('vw_fitness_gym_related_product_show_hide',true);
	if($vw_fitness_gym_related_product_show_hide != true){
		$vw_fitness_gym_custom_css .='.related.products{';
			$vw_fitness_gym_custom_css .='display: none;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_padding_top_bottom = get_theme_mod('vw_fitness_gym_products_padding_top_bottom');
	if($vw_fitness_gym_products_padding_top_bottom != false){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_fitness_gym_products_padding_top_bottom).'!important;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_padding_left_right = get_theme_mod('vw_fitness_gym_products_padding_left_right');
	if($vw_fitness_gym_products_padding_left_right != false){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_fitness_gym_custom_css .='padding-left: '.esc_attr($vw_fitness_gym_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_fitness_gym_products_padding_left_right).'!important;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_box_shadow = get_theme_mod('vw_fitness_gym_products_box_shadow');
	if($vw_fitness_gym_products_box_shadow != false){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_fitness_gym_custom_css .='box-shadow: '.esc_attr($vw_fitness_gym_products_box_shadow).'px '.esc_attr($vw_fitness_gym_products_box_shadow).'px '.esc_attr($vw_fitness_gym_products_box_shadow).'px #191a1f;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_border_radius = get_theme_mod('vw_fitness_gym_products_border_radius', 0);
	if($vw_fitness_gym_products_border_radius != false){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_products_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_btn_padding_top_bottom = get_theme_mod('vw_fitness_gym_products_btn_padding_top_bottom');
	if($vw_fitness_gym_products_btn_padding_top_bottom != false){
		$vw_fitness_gym_custom_css .='.woocommerce a.button{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_fitness_gym_products_btn_padding_top_bottom).' !important;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_btn_padding_left_right = get_theme_mod('vw_fitness_gym_products_btn_padding_left_right');
	if($vw_fitness_gym_products_btn_padding_left_right != false){
		$vw_fitness_gym_custom_css .='.woocommerce a.button{';
			$vw_fitness_gym_custom_css .='padding-left: '.esc_attr($vw_fitness_gym_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_fitness_gym_products_btn_padding_left_right).' !important;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_products_button_border_radius = get_theme_mod('vw_fitness_gym_products_button_border_radius', 0);
	if($vw_fitness_gym_products_button_border_radius != false){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_products_button_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_woocommerce_sale_position = get_theme_mod( 'vw_fitness_gym_woocommerce_sale_position','right');
    if($vw_fitness_gym_woocommerce_sale_position == 'left'){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_fitness_gym_custom_css .='left: -10px; right: auto;';
		$vw_fitness_gym_custom_css .='}';
	}else if($vw_fitness_gym_woocommerce_sale_position == 'right'){
		$vw_fitness_gym_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_fitness_gym_custom_css .='left: auto; right: 0;';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_woocommerce_sale_font_size = get_theme_mod('vw_fitness_gym_woocommerce_sale_font_size');
	if($vw_fitness_gym_woocommerce_sale_font_size != false){
		$vw_fitness_gym_custom_css .='.woocommerce span.onsale{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_woocommerce_sale_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_fitness_gym_woocommerce_sale_padding_top_bottom');
	if($vw_fitness_gym_woocommerce_sale_padding_top_bottom != false){
		$vw_fitness_gym_custom_css .='.woocommerce span.onsale{';
			$vw_fitness_gym_custom_css .='padding-top: '.esc_attr($vw_fitness_gym_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_fitness_gym_woocommerce_sale_padding_top_bottom).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_woocommerce_sale_padding_left_right = get_theme_mod('vw_fitness_gym_woocommerce_sale_padding_left_right');
	if($vw_fitness_gym_woocommerce_sale_padding_left_right != false){
		$vw_fitness_gym_custom_css .='.woocommerce span.onsale{';
			$vw_fitness_gym_custom_css .='padding-left: '.esc_attr($vw_fitness_gym_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_fitness_gym_woocommerce_sale_padding_left_right).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_woocommerce_sale_border_radius = get_theme_mod('vw_fitness_gym_woocommerce_sale_border_radius', 0);
	if($vw_fitness_gym_woocommerce_sale_border_radius != false){
		$vw_fitness_gym_custom_css .='.woocommerce span.onsale{';
			$vw_fitness_gym_custom_css .='border-radius: '.esc_attr($vw_fitness_gym_woocommerce_sale_border_radius).'px;';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_fitness_gym_site_title_font_size = get_theme_mod('vw_fitness_gym_site_title_font_size');
	if($vw_fitness_gym_site_title_font_size != false){
		$vw_fitness_gym_custom_css .='.logo h1, .logo p.site-title{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_site_title_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_fitness_gym_site_tagline_font_size = get_theme_mod('vw_fitness_gym_site_tagline_font_size');
	if($vw_fitness_gym_site_tagline_font_size != false){
		$vw_fitness_gym_custom_css .='.logo p.site-description{';
			$vw_fitness_gym_custom_css .='font-size: '.esc_attr($vw_fitness_gym_site_tagline_font_size).';';
		$vw_fitness_gym_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_fitness_gym_preloader_bg_color = get_theme_mod('vw_fitness_gym_preloader_bg_color');
	if($vw_fitness_gym_preloader_bg_color != false){
		$vw_fitness_gym_custom_css .='#preloader{';
			$vw_fitness_gym_custom_css .='background-color: '.esc_attr($vw_fitness_gym_preloader_bg_color).';';
		$vw_fitness_gym_custom_css .='}';
	}

	$vw_fitness_gym_preloader_border_color = get_theme_mod('vw_fitness_gym_preloader_border_color');
	if($vw_fitness_gym_preloader_border_color != false){
		$vw_fitness_gym_custom_css .='.loader-line{';
			$vw_fitness_gym_custom_css .='border-color: '.esc_attr($vw_fitness_gym_preloader_border_color).'!important;';
		$vw_fitness_gym_custom_css .='}';
	}