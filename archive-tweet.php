<?php
get_header();
?>
    <ul class="list-group  mb-5">
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
                <li class="list-group-item"><?php the_content(); ?></li>
				<?php
			}
		} ?>
    </ul>

    <nav class="text-center" aria-label="페이지번호">
		<?= paginate_links() ?>
    </nav>

<?php
get_footer();
