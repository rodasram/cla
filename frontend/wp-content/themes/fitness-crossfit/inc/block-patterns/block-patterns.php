<?php
/**
 *  Fitness Crossfit: Block Patterns
 *
 * @package  Fitness Crossfit
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'fitness-crossfit',
		array( 'label' => __( 'Fitness Crossfit', 'fitness-crossfit' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'fitness-crossfit/banner-section',
		array(
			'title'      => __( 'Banner Section', 'fitness-crossfit' ),
			'categories' => array( 'fitness-crossfit' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\",\"id\":2557,\"dimRatio\":0,\"align\":\"full\",\"className\":\"fitness-crossfit-banner-section  \"} -->\n<div class=\"wp-block-cover alignfull fitness-crossfit-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-2557\" alt=\"\" src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\" ps-lg-5 mx-lg-5 \"} -->\n<div class=\"wp-block-columns alignfull  ps-lg-5 mx-lg-5\"><!-- wp:column {\"verticalAlignment\":\"top\",\"width\":\"50%\",\"className\":\"fitness-crossfit-banner-section1 pt-5 px-md-5\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top fitness-crossfit-banner-section1 pt-5 px-md-5\" style=\"flex-basis:50%\"><!-- wp:heading {\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"45px\"}}} -->\n<h1 style=\"font-size:45px\">ARE YOU READY TO CHANGE?</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->\n<p style=\"font-size:16px\">loream ispum&nbsp;is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry’s standard dummy text </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"verticalAlignment\":\"top\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"black\",\"style\":{\"color\":{\"background\":\"#ffc702\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-black-color has-text-color has-background\" style=\"background-color:#ffc702\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'fitness-crossfit/calculator-section',
		array(
			'title'      => __( 'calculator-section', 'fitness-crossfit' ),
			'categories' => array( 'fitness-crossfit' ),
			'content'    => "<!-- wp:group {\"className\":\"fitness-crossfit-calculator-section py-lg-5\"} -->\n<div class=\"wp-block-group fitness-crossfit-calculator-section py-lg-5\"><!-- wp:columns {\"className\":\"fitness-crossfit-bmi-section  \"} -->\n<div class=\"wp-block-columns fitness-crossfit-bmi-section\"><!-- wp:column {\"className\":\"fitness-crossfit-bmi-section1\"} -->\n<div class=\"wp-block-column fitness-crossfit-bmi-section1\"><!-- wp:heading {\"level\":5} -->\n<h5>WHAT IS BMI</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Calculate your BMI</h3>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"textColor\":\"black\",\"className\":\"paragraph1\"} -->\n<p class=\"paragraph1 has-black-color has-text-color\">Weight in KG</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\">Value</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"textColor\":\"black\",\"className\":\"calculate\"} -->\n<p class=\"calculate has-black-color has-text-color\">Calculate</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"textColor\":\"black\",\"className\":\"paragraph1\"} -->\n<p class=\"paragraph1 has-black-color has-text-color\">Height in Feet</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\">Value</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\">Result</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"\",\"className\":\"fitness-crossfit-bmi-section2 p-lg-5\"} -->\n<div class=\"wp-block-column fitness-crossfit-bmi-section2 p-lg-5\"><!-- wp:table {\"textColor\":\"white\",\"fontSize\":\"small\"} -->\n<figure class=\"wp-block-table has-small-font-size\"><table class=\"has-white-color has-text-color\"><tbody><tr><td class=\"has-text-align-left\" data-align=\"left\">BMI</td><td class=\"has-text-align-left\" data-align=\"left\">WEIGHT STATUS</td></tr><tr><td class=\"has-text-align-left\" data-align=\"left\">Bellow 18.5</td><td class=\"has-text-align-left\" data-align=\"left\">Underweight</td></tr><tr><td class=\"has-text-align-left\" data-align=\"left\">18.5-24.9</td><td class=\"has-text-align-left\" data-align=\"left\">Healthy</td></tr><tr><td class=\"has-text-align-left\" data-align=\"left\">25-29.9</td><td class=\"has-text-align-left\" data-align=\"left\">Overweight</td></tr><tr><td class=\"has-text-align-left\" data-align=\"left\">30.0 - and Above</td><td class=\"has-text-align-left\" data-align=\"left\">Obese</td></tr></tbody></table></figure>\n<!-- /wp:table --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}