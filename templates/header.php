<section id="hwrap">
<section class="top-bar hidden-xs">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('selling_points', 'options') ):
      ?>
      <ul>
      <?php
        // loop through the rows of data
          while ( have_rows('selling_points', 'options') ) : the_row();

              // display a sub field value
              $icon = get_sub_field('icon');
              $selling_point = get_sub_field('selling_point');
      ?>
      <li><i class="fa <?php echo $icon; ?>"></i> <?php echo $selling_point; ?></li>
      <?php
          endwhile;
      ?>
      </ul>
      <?php
      endif;
      ?>
      
    </div><!-- #col-md-6 -->
    <div class="col-md-4">
      <?php
      if (has_nav_menu('topbar_navigation')) :
        wp_nav_menu(['theme_location' => 'topbar_navigation', 'menu_class' => 'pull-right']);
      endif;
      ?>
    </div>
    <div class="col-md-2 hidden-md">
    <ul class="pull-right">
    <li><i class="fa fa-phone"></i> <?php echo imaginaire_get_option('telephone'); ?></li>
    </ul>
    </div>
  </div>
</div>
</section>

<header>
<div class="container-fluid">
<div class="row">
    <div class="col-md-3 hidden-xs">
      <?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> 
    </div>
    <div class="col-md-6">
        <a href="<?php bloginfo('url'); ?>">
        <img src="<?php the_field('logo', 'options'); ?>" class="logo img-responsive" alt="<?php echo imaginaire_get_option('company'); ?>" />
        </a>
    </div>
    <div class="col-md-3">
      <div class="cart-panel">
        <div class="row">
        <div class="col-md-12">
<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">Your Cart:</a>

<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_total(); ?></a>
        </div>
        </div>
      </div>
    </div>
</div>
</div>
</header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary_navigation',
            'depth'             => 4,
            'container'         => 'ul',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'mega-menu',
            'menu_class'        => 'nav navbar-nav yamm',
            'fallback_cb'       => 'Yamm_Fw_Nav_Walker_menu_fallback',
            'walker'            => new Yamm_Fw_Nav_Walker())
        );
    ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>