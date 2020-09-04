<?php
get_header();
?>
<?php if ( $wp_query->post_count ) { ?>
	<ul class="list-group  mb-5">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<li class="list-group-item">
					<div class="float-right">
						<a href="<?php the_permalink(); ?>">#</a>
					</div>

					<?php the_content(); ?>

				</li>
				<?php
			}
		}
		?>
	</ul>
<?php } else { ?>
	<p>트윗이 없습니다.</p>
<?php } ?>

	<nav class="text-center" aria-label="페이지번호">
		<?php echo paginate_links(); ?>
	</nav>

<?php
get_footer();
