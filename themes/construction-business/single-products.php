<?php
/**
 * The template for displaying all single products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @since Business Consultr 1.0.0
 */
get_header();

# Print banner with breadcrumb and post title.
business_consultr_inner_banner();

?>
<section class="wrapper wrap-detail-page" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<main id="main" class="post-main-content" role="main">
					<?php
						# Loop Start
						while( have_posts() ): the_post();

							# Print posts respect to the post format
							// get_template_part( 'template-parts/single/content', get_post_format() );
							?>


							<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
							    <div class="post-content-inner">
							    	<div class="row">
							    		<div class="col-md-8">
									        <?php if( has_post_thumbnail() ): ?>
									            <div class="post-thumbnail">
									            	<a href="<?php the_field('attachment'); ?>">
									                	<?php the_post_thumbnail( 'business-consultr-1200-850' ); ?>
									                </a>
									            </div>
									        <?php endif; ?>
									    </div>
									    <div class="col-md-4" style="padding: 0px;">
									    	<ul class="list-group">
  												<li class="list-group-item">
  													<b>Name: </b> <?php the_field('product_name'); ?>
  												</li>
  												<li class="list-group-item">
  													<b>Price: </b> <?php the_field('price'); ?> <?php the_field('price_units')?>
  												</li>
  												<li class="list-group-item">
  													<b>Egg Capacity: </b> <?php the_field('egg_capacity'); ?> Eggs
  												</li>
  												<li class="list-group-item">
  													<b>Egg Turning: </b> <?php the_field('egg_turning'); ?>
  												</li>
  												<li class="list-group-item">
  													<b>Hatch Rate: </b> <?php the_field('hatch_rate'); ?>%
  												</li>
  												<li class="list-group-item">
  													<b>Setting Area: </b> <?php the_field('setting_area'); ?> Eggs
  												</li>
  												<li class="list-group-item">
  													<b>Power Consumption: </b> <?php the_field('power_consumption'); ?> W
  												</li>
  												<li class="list-group-item">
		  											<b>Voltage: </b> <?php the_field('voltage'); ?> V
	  											</li>
	  											<li class="list-group-item">
		  											<b>Solar Compatibility: </b> 
		  											<script>
		  												var letter = "Yes";
		  												var me = "<?php the_field('solar_compatibility'); ?>";
		  												
		  												if(me){
		  													letter = "Yes";
		  												}
		  												else {
		  													letter = "No";
		  												}

		  												document.write(letter);
		  											</script>
		  										</li>
  											</ul>
									    </div>
								    </div>
							        <div class="post-text" >
							            <?php
							                # Prints out the contents of this post after applying filters.
							                the_content();
							                wp_link_pages( array(
							                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'business-consultr' ),
							                    'after'       => '</div>',
							                    'link_before' => '<span class="page-number">',
							                    'link_after'  => '</span>',
							                ) );
							            ?>
							        </div>
							        <?php if( 'post' == get_post_type() ) business_consultr_entry_footer(); ?>
							    </div>
							</article>


							<?php
							# Print the author details of this post
							get_template_part( 'template-parts/single/content', 'author-detail' );

							# If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							# Navigate the post. Next post and Previou post.
							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous Post', 'business-consultr' ) . '</span><span class="nav-title">%title</span>',
								'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next Post', 'business-consultr' ) . '</span><span class="nav-title">%title</span>',
							) );

						# Loop End
						endwhile; 
					?>
				</main>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>