<?php

// check if the repeater field has rows of data
if( have_rows('panels', 'options') ):
?>
<section class="blocks">
<?php
 	// loop through the rows of data
    while ( have_rows('panels', 'options') ) : the_row();

        // Variables
        $text = get_sub_field('title');
        $sub = get_sub_field('subtitle');
        $img = get_sub_field('bg_img');
        $bgcolour = get_sub_field('background_colour');
        $link = get_sub_field('link');

        if($img):
        	$style = "background-image:url(" .$img. ");";
        elseif($bgcolour):
        	$style = "background-color: ". $bgcolour .";";
        else:
        	$style = "background-color: #1c1c1c;";
        endif;
?>

<div class="block" style="<?php echo $style; ?>">
	<?php if($link): ?>
		<a href="<?php echo $link; ?>">
	<?php endif; ?>
	<div class="panel-content">
		<h3><?php echo $text; ?></h3>
		<p><?php echo $sub; ?></p>
	</div>
	<?php if($img): ?>
		<div class="overlay"></div>
	<?php endif; ?>
	<?php if($link): ?>
		</a>
	<?php endif; ?>
</div>

<?php
    endwhile;
?>
</section>
<?php

endif;

?>