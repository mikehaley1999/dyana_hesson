<?php 

/** 
* Template Name: About Page
* Description: Template used for the About Page
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
add_filter( 'body_class', 'bbs_about_body_class' );
function bbs_about_body_class( $classes ){
	$classes[] = 'about-page';
	return $classes;
}

add_action( 'genesis_after_content', 'bbs_about_acf' );
function bbs_about_acf() { ?>

    <div class="about-dyana aligncenter">
        <h1><?php the_field('about_dyana');?></h1>           
    </div>

	<div class="about-row-1">

    	<div class="alignleft row-1-text">
    		<?php the_field('about_row_1_text');?>	
    	</div>
    	<div class=" alignright row-1-img">
    		<?php $image = wp_get_attachment_image_src(get_field('about_row_1_image'), 'full'); ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_1_image')) ?>" />
    	</div>
    	
    </div>

    <div class="about-row-2">

    	<div class="alignleft row-2-img">
    		<?php $image = wp_get_attachment_image_src(get_field('about_row_2_image'), 'full'); ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_2_image')) ?>" />
    	</div>
    	<div class=" alignright row-2-text">
    		<?php the_field('about_row_2_text');?>	
    	</div>
    	
    </div>

    <div class="about-row-3">

    	<div class="alignleft row-3-text">
    		<?php the_field('about_row_3_text');?>	
    	</div>
    	<div class=" alignright row-3-img">
    		<?php $image = wp_get_attachment_image_src(get_field('about_row_3_image'), 'full'); ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_3_image')) ?>" />	
    	</div>
    	
    </div>

    <div class="about-row-4">

    	<div class="alignleft one-half row-4-img">
    		<?php $image = wp_get_attachment_image_src(get_field('about_row_4_image'), 'full'); ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_4_image')) ?>" />
    	</div>
    	<div class=" alignright two-fifths row-4-text">
    		<?php the_field('about_row_4_text');?>	
    	</div>
    	
    </div>

    <div class="about-row-5">

        <div class=" alignleft two-fifths row-5-text">
            <?php the_field('about_row_5_text');?>   
        </div>

        <div class="alignright one-half row-5-img">
            <?php $image = wp_get_attachment_image_src(get_field('about_row_5_image'), 'full'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_5_image')) ?>" />
        </div>
        
        
    </div>

    <div class="about-row-6">

        <div class=" alignleft two-fifths row-6-text">
            <?php the_field('about_row_6_text');?>   
        </div>

        <div class="alignright one-half row-6-img">
            <?php $image = wp_get_attachment_image_src(get_field('about_row_6_image'), 'full'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_6_image')) ?>" />
        </div>
        
        
    </div>

    <div class="about-row-7">

        <div class="alignleft one-half row-7-img">
            <?php $image = wp_get_attachment_image_src(get_field('about_row_7_image'), 'full'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_7_image')) ?>" />
        </div>

        <div class="alignright two-fifths row-7-1-img">
            <?php $image = wp_get_attachment_image_src(get_field('about_row_7-1_image'), 'full'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('about_row_7-1_image')) ?>" />
        </div>
        
    </div>

    <div class="about-row-8">

        <div class="aligncenter row-8-text">
            <?php the_field('about_row_8_text')?>
        </div>

        
    </div>

    <div class="about-row-9">

        <div class="aligncenter dh-video">
            <?php $video_url = 'http://vimeo.com/77817872';
            $video = wp_oembed_get( $video_url );
            echo $video;?>
        </div>

        
    </div>

<?php 
}

/*add_action( 'genesis_after_content', 'bbs_about_page_widget_areas' );
function bbs_about_page_widget_areas() {
	genesis_widget_area( 'about-page-1', array(
		'before'	=>	'<div class="about-page-1 flexible-widget-area widget-area widget-thirds"><div class="wrap">',
		'after'		=>	'</div></div>',
	) );
}*/

genesis();