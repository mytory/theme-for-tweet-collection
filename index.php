<?php
get_header();
?>
    <p class="h3  mb-5"><a href="<?= get_post_type_archive_link( 'tweet' ) ?>">Go to Tweets Archive</a></p>
    <h2>Search</h2>
<?php tc_print_searchform(); ?>
<?php
get_footer();
