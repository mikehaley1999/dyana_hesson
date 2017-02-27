<?php 

/** 
* Template Name: Galleries Page
* Description: Template used for the Galleries Page
*/

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

//* Remove the default Genesis loop
	remove_action( 'genesis_loop', 'genesis_do_loop' );

//* Force full-width-content layout
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Remove .site-inner
	add_filter( 'genesis_markup_site-inner', '__return_null' );
	add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
	add_filter( 'genesis_markup_content', '__return_null' );

//* Add custom body class
add_filter( 'body_class', 'bbs_galleries_body_class' );
function bbs_galleries_body_class( $classes ){
	$classes[] = 'galleries-page';
	return $classes;
}

add_action( 'genesis_after_content', 'bbs_galleries_acf' );
function bbs_galleries_acf() { ?>

    <h1 class="galleries-title">Galleries</h1>

	<div id="galleries-row-1">

    	<div class="galleries-row-1">
    		<?php the_field('galleries_row_1');?>	
    	</div>
    	
        <div class="galleries-row-1-image ">
            <?php the_field('galleries_row_1_image'); ?>
        </div>

    </div>

    <div id="galleries-row-2">

        <div class="galleries-row-2">
            <?php the_field('galleries_row_2');?>  
        </div>
        
        <div class="galleries-row-2-image ">
            <?php the_field('galleries_row_2_image'); ?>
        </div>

    </div>

    <div id="galleries-row-3">

        <div class="galleries-row-3">
            <?php the_field('galleries_row_3');?>  
        </div>
        
        <div class="galleries-row-3-image ">
            <?php the_field('galleries_row_3_image'); ?>
        </div>

    </div>
<?php 
}
genesis();