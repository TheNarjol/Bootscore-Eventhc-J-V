<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 * @version 6.0.0
 */
// Exit if accessed directly
defined('ABSPATH') || exit;
get_header();
?>

<div id="content" class="site-content bg-dark  text-white <?=
apply_filters('bootscore/class/container', 'container', 'index');?> <?=
apply_filters('bootscore/class/content/spacer', 'pt-0 pb-5 px-0', 'index');?>
">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php get_template_part('template-parts/index/portada');?>

            <?php get_template_part('template-parts/index/tevents');?>

            <?php get_template_part('template-parts/index/masonry');?>

            <?php get_template_part('template-parts/index/portfolio');?>

            <?php get_template_part('template-parts/index/marketing');?>

            <?php get_template_part('template-parts/index/equip');?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
?>