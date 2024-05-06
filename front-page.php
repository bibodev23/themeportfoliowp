<?php 
//front-page.php
get_header();
?>
<?php get_template_part('template-parts/presentation') ?>
<?php get_template_part('template-parts/services')?>
<?php get_template_part('template-parts/collaboration') ?>
<?php get_template_part('template-parts/portfolio') ?>
<?php get_template_part('template-parts/avis') ?>
<?php get_template_part('template-parts/faq') ?>
<?php get_template_part('template-parts/contact') ?>

<?php
the_content();
get_footer();