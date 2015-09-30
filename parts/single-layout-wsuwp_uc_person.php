<?php while ( have_posts() ) : the_post(); ?>
<article class="single-people-section">
<section class="row side-right gutter pad-ends">
	<div class="column one">
		<header class="article-header">
				<?php
				if ( has_post_thumbnail() ) {
					?><figure class="article-thumbnail"><?php the_post_thumbnail( array( 132, 132, true ) ); ?></figure><?php
				}

				if ( function_exists( 'wsuwp_uc_get_meta' ) ) {
					$display_fields = array( 'prefix', 'first_name', 'last_name', 'suffix', 'title', 'title_secondary', 'office', 'email', 'phone' );
					$display_data = array();
					foreach( $display_fields as $df ) {
						$display_data[ $df ] = wsuwp_uc_get_meta( get_the_ID(), $df );
					}

					// Create the name for display. If a first and last name are set, then look for a suffix and attach.
					if ( ! empty( trim( $display_data['first_name'] ) ) && ! empty( trim( $display_data['last_name'] ) ) ) {
						$display_name = trim( join( ', ', array( $display_data['last_name'], $display_data['first_name'] ) ) );

						if ( ! empty( $display_data['suffix'] ) ) : $display_name .= ', ' . $display_data['suffix']; endif;
					}

					// If no display name is available, use the title.
					if ( empty( $display_name ) ) : $display_name = get_the_title(); endif; ?>

					<h3 class="article-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo esc_html( $display_name ); ?></a></h3><?php

					if ( ! empty( $display_data['title'] ) ) : ?><div class="person-title"><?php echo esc_html( $display_data['title'] ); ?></div><?php endif;
					if ( ! empty( $display_data['title_secondary'] ) ) : ?><div class="person-title-secondary"><?php echo esc_html( $display_data['title_secondary'] ); ?></div>
					<div class="person-office"><?php echo esc_html( $display_data['office'] ); ?></div><?php endif;
					if ( ! empty( $display_data['object_url'] ) ) : ?><div class="person-title"><?php echo esc_html( $display_data['object_url'] ); ?></div><?php endif;
				} ?>
					<div class="personnel-category-tags"><?php the_category(' | '); ?></div>
		</header>
		<div class="article-body">
			<?php get_template_part( 'articles/post', get_post_type() ) ?>
		</div>
	</div>

	<div class="column two">

			
	</div><!--/column-->

</section>
</article>
<?php endwhile;