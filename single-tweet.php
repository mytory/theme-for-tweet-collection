<?php
get_header();
the_post();
?>

<article class="h1">
	<?php the_content(); ?>

	<footer class="text-center">
		<a href="<?php echo get_post_type_archive_link( 'tweet' ); ?>">목록</a>
	</footer>
</article>



<?php
get_footer();
