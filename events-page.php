<?php 

/** 
* Template Name: Events Page
* Description: Template used for the Events Page
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
add_filter( 'body_class', 'bbs_events_body_class' );
function bbs_events_body_class( $classes ){
	$classes[] = 'events-page';
	return $classes;
}

add_action( 'genesis_after_content', 'bbs_events_acf' );
function bbs_events_acf() { ?>

    <h1 class="events-title">Events & News</h1>

	<div id="events-row-1">

    	<div class="events-row-1">
    		<?php the_field('events_row_1');?>	
    	</div>
    	
        <div class="events-row-1-image ">
            <?php $image = wp_get_attachment_image_src(get_field('events_row_1_image'), 'full'); ?>
            <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_1_image')) ; ?>" data-rel="lightbox" />
        </div>

    </div>

    <div id="events-row-2">

    	<div class="events-row-2">
    		<?php the_field('events_row_2');?>	
    	</div>

        <div class="events-row-2-image ">
            <?php $image = wp_get_attachment_image_src(get_field('events_row_2_image'), 'full'); ?>
            <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_2_image')); ?>" 
        </div>
    	
    </div>

    <div id="events-row-3">

    	<div class="events-row-3-video">
    		<?php $video_url = 'https://player.vimeo.com/video/142019653';
            $video = wp_oembed_get( $video_url );
            echo $video;?>	
    	</div>

        <div class="events-row-3">
            <?php the_field('events_row_3');?>
        </div>

    </div>

    <div id="events-row-4">

        <div id="events-row-4-first">

        	<div class="events-row-4-image">
        		<?php $image = wp_get_attachment_image_src(get_field('events_row_4_image'), 'full'); ?>
                <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_4_image')); ?>"/>	
        	</div>
            
            <div class="events-row-4">
                <?php the_field('events_row_4'); ?>
            </div>

        </div>

        <div id="events-row-4-last">

            <div class="events-row-4-1-image">
                <?php $image = wp_get_attachment_image_src(get_field('events_row_4-1_image'), 'full'); ?>
                <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_4-1_image')); ?>"/>
            </div>

            <div class="events-row-4-1">
                <?php the_field('events_row_4-1'); ?>
            </div>

        </div>

    </div>

    <div id="events-row-5">

        <div class="events-row-5-text">
            <?php the_field('events_row_5');?>   
        </div>

        <div class="events-row-5-images">
            <?php 
            $images = get_field('events_row_5_images');

                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>  
        </div>
        
    </div>

    <div id="events-row-5-gallery">

            <?php 
            $images = get_field('events_row_5_gallery');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" rel="lightbox" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>  

    </div>
        

    <div id="events-row-6">

        <div class="events-row-6">
            <?php the_field('events_row_6');?>   
        </div>

        <div class="events-row-6-image">
                <?php $image = wp_get_attachment_image_src(get_field('events_row_6_image'), 'full'); ?>
                <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_6_image')); ?>"/>
        </div>
        
    </div>

    <div id="events-row-7">

        <div class="events-row-7-image">
                <?php $image = wp_get_attachment_image_src(get_field('events_row_7_image'), 'full'); ?>
                <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_7_image')); ?>"/>
        </div>

        <div class="events-row-7">
            <?php the_field('events_row_7');?>   
        </div>
        
    </div>

    <div id="events-row-8">

        <div class="events-row-8-image">
            <?php the_field('events_row_8_image');?>   
        </div>
        
    </div>

    <div id="events-row-9">

        <div class="events-row-9">
            <?php the_field('events_row_9');?> 
        </div>

        <div class="events-row-9-image">
                <?php the_field('events_row_9_image'); ?>
        </div>
        
    </div>

    <div id="events-row-9-gallery">

        <div class="events-row-9-gallery">
            <?php 
            $images = get_field('events_row_9_gallery');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" rel="lightbox"/>
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>  
        </div>
        
    </div>

    <div id="events-row-10">

        <div class="events-row-10-image">
                <?php the_field('events_row_10_image'); ?>
        </div>

        <div class="events-row-10">
            <?php the_field('events_row_10');?>   
        </div>
        
    </div>

    <div id="events-row-11">

        <div class="events-row-11">
            <?php the_field('events_row_11');?>  
        </div>
        
        <div class="events-row-11-image">
                <?php $image = wp_get_attachment_image_src(get_field('events_row_11_image'), 'full'); ?>
                <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_11_image')); ?>"/>
        </div>

    </div>

    <div id="events-row-12">

        <div class="events-row-12">
            <?php the_field('events_row_12');?>  
        </div>

        <div class="events-row-12-image">
                <?php the_field('events_row_12_image'); ?>
        </div>

    </div>

    <div id="events-row-13">

        <div class="events-row-13">
            <?php the_field('events_row_13');?>  
        </div>

        <div class="events-row-13-image">
                <?php the_field('events_row_13_image'); ?>
        </div>
        
    </div>

    <div id="events-row-14">

        <div class="events-row-14">
            <?php the_field('events_row_14');?>   
        </div>
        
        <div class="events-row-14-gallery">
            <?php 
            $images = get_field('events_row_14_images');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>  
        </div>

    </div>

    <div id="events-row-15">

        <div class="events-row-15">
            <?php the_field('events_row_15');?>  
        </div>

        <div class="events-row-15-image">
            <?php the_field('events_row_15_image'); ?>
        </div>

    </div>

    <div id="events-row-16">

        <div class="events-row-16-image">
            <?php the_field('events_row_16_image');?>  
        </div>

        <div class="events-row-16">
            <?php the_field('events_row_16');?>  
        </div>

    </div>

    <div id="events-row-17">

        <div class="events-row-17-image">
            <?php $image = wp_get_attachment_image_src(get_field('events_row_17_image'), 'full'); ?>
            <img src = "<?php echo $image[0];?>" alt="<?php echo get_the_title(get_field('events_row_17_image')); ?>"/>
        </div>

        <div class="events-row-17">
            <?php the_field('events_row_17');?>  
        </div>
        
    </div>

<?php
}
genesis();