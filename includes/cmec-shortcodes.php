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
		add_shortcode( 'cbm_pub', array( $this, 'cbm_pub_display' ) );
		add_shortcode( 'p_pub', array( $this, 'p_pub_display' ) );
		add_shortcode( 'se_pub', array( $this, 'se_pub_display' ) );
		add_shortcode( 'wmel_pub', array( $this, 'wmel_pub_display' ) );
		add_shortcode( 'wmel_project', array( $this, 'wmel_projects_display' ) );
		add_shortcode( 'se_project', array( $this, 'se_projects_display' ) );
		add_shortcode( 'p_project', array( $this, 'p_projects_display' ) );
		add_shortcode( 'cbm_project', array( $this, 'cbm_projects_display' ) );
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
	/**
	 * Handle the display of the Cementitious-Bituminous-publications shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function cbm_pub_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_publication',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'cbm-publications'
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
	 * Handle the display of the Structural Engineering Publications shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function se_pub_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_publication',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'structural-engineering-publications'
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
	 * Handle the display of the Polymeric Publications shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function p_pub_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_publication',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'polymeric-materials-publications'
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
	 * Handle the display of the Wood Materials Publications shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function wmel_pub_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_publication',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'wmel-publications'
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
	 * Handle the display of the Wood Materials Projects shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function wmel_projects_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_project',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'wmel-projects'
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
	 * Handle the display of the Structural Engineering Projects shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function se_project_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_project',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'structural-engineering-projects'
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
	 * Handle the display of the Polymeric Projects shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function p_project_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_project',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'polymeric-materials-projects'
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
	 * Handle the display of the Cementatious Projects shortcode, which displays a list of
	 * 
	 *
	 * @return string HTML output
	 */
	public function cbm_project_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>

		<div class="loop">
			<?php
			$args = array(
				'posts_per_page' => 4,
				'offset'=> 0,
				'post_type' => 'wsuwp_uc_project',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => 'cbm-projects'
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