<section class="bot-bar">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<button type="button" data-toggle="modal" data-target="#requestSample" class="btn btn-primary">
			Request a Brochure</button>
		</div>
		<div class="col-md-6 center">
			<p>If you need any help, please don't hesitate to call us on <?php echo imaginaire_get_option('telephone'); ?>
		</div>
		<div class="col-md-3">
		<a href="<?php bloginfo('url'); ?>/basket/" class="btn btn-primary pull-right">
			View Cart</a>
			<a href="<?php bloginfo('url'); ?>/fabric-sample/" class="btn btn-primary pull-right">
			Order Free Fabric Samples</a>
			
		</div>
	</div>
</div>
</section>
<footer class="content-info">
  <div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-3">
	    	<?php dynamic_sidebar('sidebar-footer-1'); ?>
	    </div>
		<div class="col-md-3">
	    	<?php dynamic_sidebar('sidebar-footer-2'); ?>
	    </div>
	    <div class="col-md-3">
	    	<?php dynamic_sidebar('sidebar-footer-3'); ?>
	    </div>
	    <div class="col-md-3">
	    <?php dynamic_sidebar('sidebar-footer-4'); ?>
	    </div>
	   </div>
  </div>
</footer>