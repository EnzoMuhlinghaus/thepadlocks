<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">

    <?php wp_head(); ?>
</head>
<body>

<?php get_header(); ?>
<h3>template single.php</h3>
<?php
while ( have_posts() ): the_post();
    ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <?php
endwhile
?>

<?php get_footer(); ?>
</body>
</html>