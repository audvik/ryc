<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
	<div class="container text-center py-5" style="max-width: 900px;">
		<h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php the_title(); ?></h4>
		<ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Pages</a></li>
			<li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>
		</ol>    
	</div>
</div>
<!-- Header End -->
<div class="container-fluid service py-5">
	<article id="post-<?php the_ID(); ?>" class="container py-5">
		<div class="entry-content">
			<?php
				if ( has_post_thumbnail() ) :
					echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
				endif;

				the_content();

				wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'ryc' ) . '</span>', 'after' => '</div>' ) );
			?>
		</div><!-- /.entry-content -->

		<?php
			edit_post_link( __( 'Edit', 'ryc' ), '<span class="edit-link">', '</span>' );
		?>
	</article><!-- /#post-<?php the_ID(); ?> -->
</div>