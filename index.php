<?php
header('location: ' . get_post_type_archive_link('tweet'));
get_header();
?>
    <meta http-equiv="refresh" content="0; url=<?= get_post_type_archive_link('tweet') ?>"/>
    <p class="h3  mb-5"><a href="<?= get_post_type_archive_link('tweet') ?>">Go to Tweets Archive</a> after 0 sec...</p>
<?php
get_footer();
