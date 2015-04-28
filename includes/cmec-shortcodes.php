<?php
/**
 * Class CMEC_Shortcodes
 */
class CMEC_Shortcodes {
	/**
	 * Setup the hooks.
	 */
	public function __construct() {
		add_shortcode( 'wmel_news', array( $this, 'wmel_news_display' ) );
		add_shortcode( 'se_news', array( $this, 'se_news_display' ) );
		add_shortcode( 'p_news', array( $this, 'p_news_display' ) );
		add_shortcode( 'cbm_news', array( $this, 'cbm_news_display' ) );
	}
	/**
	 * Handle the display of the cmel_news shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function wmel_news_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'post',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'news-wmel'
					),
				),
			);

			$my_posts = new WP_Query( $args );

			if ( $my_posts->have_posts() ) : while( $my_posts->have_posts() ) : $my_posts->the_post();
				?>
				
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<?php endwhile; endif;
			wp_reset_query();
			?>

		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
		/**
	 * Handle the display of the news-structural-engineering shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function se_news_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'post',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'news-structural-engineering'
					),
				),
			);

			$my_posts = new WP_Query( $args );

			if ( $my_posts->have_posts() ) : while( $my_posts->have_posts() ) : $my_posts->the_post();
				?>
				
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<?php endwhile; endif;
			wp_reset_query();
			?>

		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
			/**
	 * Handle the display of the news-polymeric shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function p_news_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'post',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'news-polymeric'
					),
				),
			);

			$my_posts = new WP_Query( $args );

			if ( $my_posts->have_posts() ) : while( $my_posts->have_posts() ) : $my_posts->the_post();
				?>
				
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<?php endwhile; endif;
			wp_reset_query();
			?>

		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
			/**
	 * Handle the display of the Cementitious-Bituminous shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function cbm_news_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'post',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'news-cbm'
					),
				),
			);

			$my_posts = new WP_Query( $args );

			if ( $my_posts->have_posts() ) : while( $my_posts->have_posts() ) : $my_posts->the_post();
				?>
				
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<?php endwhile; endif;
			wp_reset_query();
			?>

		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}

}
new CMEC_Shortcodes();