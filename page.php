<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();
get_template_part( 'topbar');
the_post();
?>
		<!-- Header Start -->
		<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white bg-primary display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php the_title(); ?></h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Start -->
        <div class="container-fluid overflow-hidden service py-5">
            <div id="post-<?php the_ID(); ?>" class="container overflow-hidden py-5">
                <div class="row g-4 justify-content-center">
                    <?php
					the_content();

					wp_link_pages(
						array(
							'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'ryc' ) . '">',
							'after'    => '</nav>',
							'pagelink' => esc_html__( 'Page %', 'ryc' ),
						)
					);
					edit_post_link(
						esc_attr__( 'Edit', 'ryc' ),
						'<span class="edit-link">',
						'</span>'
					);
				?>
				</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>
		</div><!-- /#post-<?php the_ID(); ?> -->
		</div><!-- /.col -->
		<?php
			get_sidebar();
		?>
<?php
get_footer();
