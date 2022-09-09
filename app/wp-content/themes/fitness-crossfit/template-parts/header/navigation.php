<?php
/**
 * The template part for header
 *
 * @package Fitness Crossfit 
 * @subpackage fitness-crossfit
 * @since Fitness Crossfit 1.0
 */
?>

<div class="container">
	<div id="header" class="menubar">
		<div class="header-menu <?php if( get_theme_mod( 'vw_fitness_gym_sticky_header', false) != '' || get_theme_mod( 'vw_fitness_gym_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="logo">
	          <div class="logo-box">
	            <?php if ( has_custom_logo() ) : ?>
	              <div class="site-logo"><?php vw_fitness_gym_the_custom_logo(); ?></div>
	            <?php endif; ?>
	            <div class="logo-inner">
	              <?php $blog_info = get_bloginfo( 'name' ); ?>
	                <?php if ( ! empty( $blog_info ) ) : ?>
	                  <?php if ( is_front_page() && is_home() ) : ?>
	                    <?php if( get_theme_mod('vw_fitness_gym_logo_title_hide_show',true) != ''){ ?>
	                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	                    <?php } ?>
	                  <?php else : ?>
	                    <?php if( get_theme_mod('vw_fitness_gym_logo_title_hide_show',true) != ''){ ?>
	                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                    <?php } ?>
	                  <?php endif; ?>
	                <?php endif; ?>
	                <?php
	                  $description = get_bloginfo( 'description', 'display' );
	                  if ( $description || is_customize_preview() ) :
	                ?>
	                <?php if( get_theme_mod('vw_fitness_gym_tagline_hide_show',true) != ''){ ?>
	                  <p class="site-description">
	                    <?php echo esc_html($description); ?>
	                  </p>
	                <?php } ?>
	              <?php endif; ?>
	            </div>
	          </div>
	        </div>
				</div>
				<div class="align-self-center <?php if( get_theme_mod( 'vw_fitness_gym_search_hide_show',true) != '') { ?>col-lg-8  col-md-10 col-6"<?php } else { ?>col-lg-9 col-md-12 <?php } ?> ">
					<?php if(has_nav_menu('primary')){ ?>
						<div class="toggle-nav mobile-menu">
		          <button role="tab" onclick="vw_fitness_gym_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_fitness_gym_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','fitness-crossfit'); ?></span></button>
		        </div> 
			    <?php } ?>
					<div id="mySidenav" class="nav sidenav">
          	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'fitness-crossfit' ); ?>">
	            <?php 
							if(has_nav_menu('primary')){
								wp_nav_menu( array( 
									'theme_location' => 'primary',
									'container_class' => 'main-menu clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
								) ); 
							}
							?>
	            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_fitness_gym_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_fitness_gym_res_close_menus_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','fitness-crossfit'); ?></span></a>
          	</nav>
	        </div>
				</div>
				<div class="col-lg-1 col-md-2 col-6 align-self-center">
	        <?php if( get_theme_mod( 'vw_fitness_gym_search_hide_show',true) != '') { ?>
		        <div class="search-box">
              <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_fitness_gym_search_icon','fas fa-search')); ?>"></i></a></span>
            </div>
	        <?php }?>
		    </div>
			</div>
		</div>
		<div class="serach_outer">
      <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_fitness_gym_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
	</div>
</div>