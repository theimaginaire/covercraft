<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      if(is_front_page()):
        // [uncomment if you want slider] echo do_shortcode('[rev_slider alias="home"]');
    ?>
<section class="big-section center">
<div class="container-fluid">
<?php get_template_part('templates/content', 'homeblocks'); ?>
</div>
</section>
<section class="big-section">
<div class="container-fluid">
<div class="row">
  <div class="col-md-6">
      <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
  </div>
  <div class="col-md-6">
  <div class="best-sellers">
    <h2>Best Selling Furniture</h2>
    <?php echo do_shortcode('[best_selling_products per_page="2"]'); ?>
  </div>
  </div>
</div>
</div>
</section>
<?php elseif(is_archive('product')): ?>
  <div class="wrap container-fluid" role="document">
      <div class="content row">

        

        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php if (Setup\display_sidebar()) : ?>
          
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
<?php
      else:
    ?>

    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
    endif;

      do_action('get_footer');
      get_template_part('templates/footer');
      get_template_part('templates/content', 'modal');
      wp_footer();
    ?>
  </body>
</html>
