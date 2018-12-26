<!doctype html>
<html lang="<?php get_locale() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container  py-5">

    <nav class="mb-5">
        <h1 class="mb-3"><a href="<?= home_url('/') ?>"><?php bloginfo( 'title' ) ?></a></h1>

        <form id="searchform" class="search-tweets-form" method="get" action="http://work.localhost/tweets">
            <label class="sr-only" for="s">Search Tweets</label>
            <input type="text" value="<?= (empty($_GET['s'])) ? '' : $_GET['s'] ?>" id="s" name="s">
            <input type="hidden" name="post_type" value="tweet">
            <input type="submit" value="Search Tweets" id="searchsubmit" class="btn btn-primary">
        </form>

    </nav>
