<div class="c20-sec has-image-bg c20-sec-blog lozad" style="background-color:#2E8BCC;" data-background-image="<?php echo $img_dir; ?>/blog-bg.png">

	<div class="container">

		<div class="c20-heading" data-aos-offset="200" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
			<h2 class="c20-title text-center text-light">Latest News & Events</h2>
		</div> 

		<?php 
			$posts_args = array(
				'post_type'   		=> 'post',
				'post_status' 		=> 'publish',
				'order'            	=> 'DESC',
				'orderby'           => 'date',
				'posts_per_page'    => 3,
			);

			$post_query = new WP_Query( $posts_args );
			
		if($post_query->have_posts()) : 

			$blog_aos_delay = 100; ?>

		<div class="row mb-5 px-3">

			<?php while($post_query->have_posts()) : $post_query->the_post(); ?>

			<div class="p-0 col-10 offset-1 col-sm-6 offset-sm-0 col-lg-3 mb-4">
				<div class="card c20-blog-card" data-aos-offset="100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="<?php echo $blog_aos_delay; ?>">

					<?php if(has_post_thumbnail()) : ?>

						<?php $thumb_url = get_the_post_thumbnail_url( get_the_ID(),'full'); ?>

						<div class="post-thumb-wrap mb-4">

							<a href="<?php the_permalink(); ?>">
								<img class="lozad" data-src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
							</a>

						</div>
					<?php endif; ?>

					<div class="card-body">

						<h2 class="h5 m-0 mb-2 card-title text-light">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>

						<div class="card-text text-light"><?php the_excerpt(); ?></div>

					</div>

				</div>
			</div>

			<?php $blog_aos_delay=$blog_aos_delay+100; endwhile; ?>


			<div class="p-0 col-10 offset-1 col-sm-6 offset-sm-0 col-lg-3 mb-0 mb-sm-4">

				<div class="card c20-blog-card" data-aos-offset="100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="<?php echo $blog_aos_delay; ?>">

				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fricksplumbingserviceinc&tabs=timeline&width=290&height=330&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="290" height="330" style="border:none;overflow:hidden; margin: auto;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>

			</div>
		
			<?php endif; wp_reset_postdata(); ?>

		</div>


		<?php if( $global_blog_page): ?>

		<div class="text-center" data-aos-offset="50" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
			<a href="<?php echo esc_url( $global_blog_page); ?>" class="btn btn-primary">Read More</a>
		</div>
		<?php endif; ?>
	</div>
</div>




