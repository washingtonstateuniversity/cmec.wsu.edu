<?php
if ( is_post_type_archive( 'wsuwp_uc_person' ) ) {
	$archive_headline = 'Personnel';
} else {
	$archive_headline = '';
}
?>
<header class="person-archive-header">
	<span class="sub-header-default"><?php echo $archive_headline; ?></span>
</header>
<section class="row single gutter pad-ends entity-section">
	<div class="column one">
	

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'articles/post', get_post_type() ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!--/column-->

</section>