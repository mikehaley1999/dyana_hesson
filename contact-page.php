<?php 

/** 
* Template Name: Contact Page
* Description: Template used for the Contact Page
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
add_filter( 'body_class', 'bbs_contact_body_class' );
function bbs_contact_body_class( $classes ){
	$classes[] = 'contact-page';
	return $classes;
}

add_action( 'genesis_after_content', 'bbs_contact_acf' );
function bbs_contact_acf() { ?>

    <h1 class="contact-title">Contact</h1>

	<div id="contact-row-1">

    	<div class="contact-row-1-image one-third">
    		<?php the_field('contact_row_1_image');?>	
    	</div>
    	
        <div class="contact-row-1 one-third">
            <?php the_field('contact_row_1'); ?>
        </div>

        <div class="contact-row-1-1 one-third">
            <?php the_field('contact_row_1-1'); ?>
        </div>

        <div id="contact-row-2">

        <div class="contact-row-2">
            <?php the_field('contact_row_2');?>   
        </div>
        
        </div>

    </div>

    <div id="contact-row-3">

        <div class="contact-row-3">
            <?php the_field('contact_row_3');?>   
        </div>
        
    </div>

<?php
}
genesis();