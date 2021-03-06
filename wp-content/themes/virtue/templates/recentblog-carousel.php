<div id="blog_carousel_container" class="carousel_outerrim">
    <?php global $post; 
    $text = get_post_meta( $post->ID, '_kad_blog_carousel_title', true ); 
    if(!empty($text)) {
    	echo '<h3 class="title">'.$text.'</h3>';
    } else {
    	echo '<h3 class="title">'.__('Recent Posts', 'virtue').'</h3>';
    } ?>
    <div class="blog-carouselcase fredcarousel">
    <?php if (kadence_display_sidebar()) {
    	$itemsize = 'tcol-md-4 tcol-sm-4 tcol-xs-6 tcol-ss-12';
    	$catimgwidth = 266;
    	$catimgheight = 266;
    	$md = 3;
    	$sm = 3;
    	$xs = 2;
    	$ss = 1; 
    } else {
    	$itemsize = 'tcol-md-3 tcol-sm-3 tcol-xs-4 tcol-ss-12';
    	$catimgwidth = 276;
    	$catimgheight = 276;
    	$md = 4;
    	$sm = 3;
    	$xs = 2;
    	$ss = 1; 
    } ?>
		<div id="carouselcontainer-blog" class="rowtight">
		<div id="blog_carousel" class="blog_carousel caroufedselclass initcaroufedsel clearfix" data-carousel-container="#carouselcontainer-blog" data-carousel-transition="300" data-carousel-scroll="1" data-carousel-auto="true" data-carousel-speed="9000" data-carousel-id="blog" data-carousel-md="<?php echo esc_attr($md);?>" data-carousel-sm="<?php echo esc_attr($sm);?>" data-carousel-xs="<?php echo esc_attr($xs);?>" data-carousel-ss="<?php echo esc_attr($ss);?>">
            <?php
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query();
				$wp_query->query(array(
					'post__not_in' 	=> array($post->ID),
					'posts_per_page'=>6
					)
				);
				 if ( $wp_query ) : 
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="<?php echo esc_attr($itemsize);?>">
                	<div <?php post_class('blog_item grid_item'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
	                    		<?php if (has_post_thumbnail( $post->ID ) ) {
	                    				$image_id = get_post_thumbnail_id( $post->ID );
										$image_src = wp_get_attachment_image_src( $image_id, 'full' ); 
										$image = aq_resize($image_src[0], $catimgwidth, $catimgheight, true, false, false, $image_id);
										if(empty($image[0])) {$image = $image_src;} 
										$img_srcset = kt_get_srcset_output($image[1], $image[2], $image_src[0], $image_id);
								} else { 
									$image_src = virtue_post_default_placeholder();
									$image = aq_resize($image_src, $catimgwidth, $catimgheight, true, false, false);
									if(empty($image[0])) {$image = array($image_src, null, null);} 
									$img_srcset = null;
								}?>
						<div class="imghoverclass" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
		                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		                        <img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title_attribute(); ?>" width="<?php echo esc_attr($image[1]);?>" height="<?php echo esc_attr($image[2]);?>" class="iconhover" <?php echo $img_srcset;?>>
		                        <meta itemprop="url" content="<?php echo esc_url($image[0]); ?>">
                                <meta itemprop="width" content="<?php echo esc_attr($image[1])?>">
                                <meta itemprop="height" content="<?php echo esc_attr($image[2])?>">
		                    </a> 
		                </div>
                    <?php $image = null; $thumbnailURL = null; ?>	
              <a href="<?php the_permalink() ?>" class="bcarousellink">
				<header>
			        <h5 class="entry-title" itemprop="name headline"><?php the_title(); ?></h5>
			        <div class="subhead" itemprop="datePublished">
			        <span class="postday"><?php echo get_the_date(get_option( 'date_format' )); ?></span>
			        </div>
				</header>
		       	<div class="entry-content" itemprop="articleBody">
		        <p><?php echo virtue_excerpt(16); ?></p>
		        </div>
				 </a>
				 <?php do_action('kadence_post_carousel_small_excerpt_footer'); ?>
                </div>
			</div>
		<?php endwhile; else: ?>
			<div class="error-not-found"><?php _e('Sorry, no blog entries found.', 'virtue');?></div>	
				<?php endif;
				$wp_query = null; 
				$wp_query = $temp;  // Reset
				wp_reset_query(); ?>
			</div>
     <div class="clearfix"></div>
            <a id="prevport-blog" class="prev_carousel icon-chevron-left" href="#"></a>
			<a id="nextport-blog" class="next_carousel icon-chevron-right" href="#"></a>
            </div>
            </div>
</div><!-- Carousel Container-->