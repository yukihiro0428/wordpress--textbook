<?php get_header(); ?>
    <section id="contents">
        <header class="page-header">
<?php the_category_image(); ?>
            <h1 class="page-title">
                <?php
                single_cat_title();?>
            </h1>
        </header>
        <div class="posts">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('content-archive');
    endwhile;
if (function_exists('page_navi')) :
    page_navi('elm_class=page-nav&edge_type=span');
    endif;
endif;
?>
        </div>
</section><!-- #contents end -->
<?php get_template_part('back_to_top'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>